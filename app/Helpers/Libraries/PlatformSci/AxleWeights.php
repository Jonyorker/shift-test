<?php

namespace App\Helpers\Libraries\PlatformSci;

use App\Helpers\Constants\StopEventTypes;
use App\Models\psbison\BisonWeightUpdates;
use App\Models\psbison\Event;
use App\Models\psbison\Freightdetail;
use App\Models\psbison\LegHeader;
use App\Models\psbison\Stops;
use App\Models\psbison\TractorProfile;
use App\Models\psbison\TrailerProfile;
use Illuminate\Support\Facades\Log;

class AxleWeights
{
    private string|int $mov;
    private string $trl;
    private string|int $steers;
    private string|int $drives;
    private string|int $traileraxle;
    private int $fuellevel;
    private string|int $bogeys;
    private mixed $trc;

    public function __construct(mixed $data)
    {
        //build all values needed to process message
        $body = explode('^', $data->Body);
        $drv = $data->Driver;
        $this->trc = in_array($drv, StopEventTypes::TESTDRIVERS) ? $data->FromUser : $data->Tractor;
        $this->mov = $body ? $body[0] : 0;
        $this->trl = $body[1];
        $this->steers = $body ? $body[2] : 0;
        $this->drives = $body ? $body[3] : 0;
        $this->traileraxle = $body ? $body[4] : 0;
        $this->fuellevel = $this->getFuelLevel($body[6]);
        $this->bogeys = $body ? $body[7] : 0;
    }

    public function Process_AxleWeights(): void
    {
        Log::debug("Parsing Axle Weights message for Mov:{$this->mov}, Truck:{$this->trc}");
        $this->RecordAxleWeights();
    }

    private function getFuelLevel(string $fuelLevel): int
    {
        return match ($fuelLevel) {
            'FULL' => 1,
            '3/4' => 2,
            '1/2' => 3,
            default => 4,
        };
    }

    private function RecordAxleWeights(): void
    {
        if ($this->steers > 0 && $this->steers < 6000) {
            $this->steers = $this->steers * 2.20462;
            $this->drives = $this->drives * 2.20462;
            $this->traileraxle = $this->traileraxle * 2.20462;
        }
        $tractorTare = $this->getTractorTare();
        $trailerTare = $this->getTrailerTare();
        $wgt = $this->steers + $this->drives + $this->traileraxle - $tractorTare - $trailerTare;
        //get lgh_number
        $legs = legheader::where('mov_number', $this->mov)->where('lgh_tractor', $this->trc)->get();
        $leg = $legs->lgh_number;

        $stop = stops::where('lgh_number', $leg)->whereIn('stp_event', ['HPL', 'LLD'])->orderBy('stp_arrivaldate', 'desc')->first();
        if (! $stop) {
            Log::debug("No valid Pickup found stop found for leg:{$leg}");

            return;
        }
        $stp = $stop->stp_number;
        $ord = $stop->ord_hdrnumber;

        //update these tables with the weight
        freightdetail::where('stp_number', $stp)->update(['fgt_weight' => $wgt]);
        event::where('stp_number', $stp)->update(['evt_weight' => $wgt, 'skip_trigger' => 1]);
        stops::where('stp_number', $stp)->update(['stp_weight' => $wgt, 'stp_loadingmetersunit' => 'Y', 'skip_trigger' => 1]);
        Log::debug('Axle Weights updated for stop:' . $stp . ' with weight:' . $wgt);
        $this->RecordWeightUpdate($ord, $wgt);
    }

    private function getTractorTare(): int
    {
        $trcProfile = tractorprofile::where('trc_number', $this->trc)->get();
        if ($trcProfile->trc_tareweight < 1) {
            return 20000;
        }

        return $trcProfile->trc_tareweight;
    }

    private function getTrailerTare(): int
    {
        $trlProfile = trailerprofile::where('trl_id', $this->trl)->get();
        if ($trlProfile->trl_mtwgt < 1) {
            return 15000;
        }

        return $trlProfile->trl_mtwgt;
    }

    private function RecordWeightUpdate(int $ord, int $wgt): void
    {
        //insert into bison_weightupdates (mov,ord,trc,wgt,dt,msg,steers,drives,traileraxle,fuellevel,bogeys)
        //values ($this->mov,$ord,$this->trc,$wgt,now(),'AXLE',$this->steers,$this->drives,$this->traileraxle,$this->fuellevel,$this->bogeys)
        // only insert steers/drives/traileraxle/fuellevel/bogeys if they are not 0
        BisonWeightUpdates::query()->create([
            'mov' => $this->mov,
            'ord' => $ord,
            'trc' => $this->trc,
            'wgt' => $wgt,
            'dt' => now(),
            'msg' => 'AXLE',
            'steers' => $this->steers,
            'drives' => $this->drives,
            'trailer' => $this->traileraxle,
            'fuellevel' => $this->fuellevel,
            'bogeys' => $this->bogeys,
        ]);

    }
}
