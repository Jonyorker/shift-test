<?php

namespace App\Helpers\Libraries\PlatformSci;

use App\Models\bison\PlatSciAutoprocess;
use App\Models\psbison\Stops;
use Exception;
use Illuminate\Support\Facades\Log;

class PickUp
{
    private string $body;
    private int $mov;
    private int $ord;
    private int $leg;
    private int $stp;
    private string $drv;
    private string $trc;
    private int $formId;
    private string $formName;
    /**
     * @var \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    private array|\Illuminate\Database\Eloquent\Collection $stops;
    private int $key;
    /**
     * @var \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed
     */
    private string $evt;
    /**
     * @var \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed
     */
    private string $cmp;
    private string $trl1;
    private string $trl2;
    private string $cd;
    private string $dest;
    private string $bolmatch;
    private string $pucode;
    private string $bol;
    private string $pcs;
    private string $wgt;
    private string $seal1;
    private string $seal2;
    private string $seal3;
    private bool $hs1;
    private bool $hs2;
    private bool $hs3;
    private string $haz;
    private string $customs;
    private string $evtTrailer;
    private string $stpcity;
    private string $type;
    private ?string $fleet;
    private int $errorCount = 1;

    public function __construct(mixed $data)
    {
        //build all values needed to process message
        [$this->body, $this->mov, $this->ord, $this->leg, $this->stp,$this->drv, $this->trc,$this->formId,$this->formName] = PlatformSci::buildAllValuesNeededToProcessMessage($data);
        $this->trl1 = $this->body[4];
        $this->trl2 = $this->body[5];
        $this->cd = $this->body[6];
        $this->dest = strtoupper($this->body[7]);
        $this->bolmatch = $this->body[8];
        $this->pucode = $this->body[9];
        $this->bol = $this->body[10];
        $this->pcs = $this->body[11] ?? 0;  //$$this->body[11] ? $this->body[11] : 0;
        $this->wgt = $this->body[12] ?? 0;
        $this->seal1 = $this->body[13];
        $this->hs1 = $this->body[14] === 'true';
        $this->seal2 = $this->body[15];
        $this->hs2 = $this->body[16] === 'true';
        $this->seal3 = $this->body[17];
        $this->hs3 = $this->body[18] === 'true';
        $this->haz = $this->body[19];
        $this->customs = $this->body[20];
        $this->type = 'PU';

        $this->stops = Stops::with('event')->where('lgh_number', '=', $this->leg)->orderBy('stp_arrivaldate')->get();
        //if there are no stops to process exit
        if ($this->stops->count() === 0) {
            Log::debug("No stops found for leg:{$this->leg}");
            //exit;
        }
        $this->key = $this->stops->search(function ($stop) {
            return $stop->stp_number == $this->stp;
        });

        $this->evt = $this->stops[$this->key]->stp_event;
        $this->cmp = $this->stops[$this->key]->cmp_id;
        $this->stpcity = $this->stops[$this->key]->stp_city;
        $this->evtTrailer = $this->stops[$this->key]->evt_trailer;
        $this->fleet = (new PlatformSci)->getFleet($this->drv);
    }

    /**
     * @throws Exception
     */
    public function Process_Pickup(): void
    {
        //stp/mov/leg/trc/drv/evt/FromName/formid
        PlatformSci::messageReceived($this->stp, $this->mov, $this->leg, $this->trc, $this->drv, $this->evt, $this->formName, $this->formId);
        Log::debug("PickUp Message Received for Leg:{$this->leg}, Stop:{$this->stp}, Driver:{$this->drv}, Trailer:{$this->trc}");
        $this->checkUpdateSeals();
        if ($this->checkPUCodeMismatch()) {
            $err = "PU Code Mismatch PUCode:{$this->pucode}, and Event:{$this->evt}";
            Log::debug($err);
            (new PlatformSci)->sendMessageToFleet($this->drv, $this->trc, $this->cmp, $err, $this->type, $this->mov, $this->mov, now(), $this->errorCount, $this->stp, $this->formId);
            $this->errorCount++;
        }
        if (in_array($this->evt, ['HPL', 'LLD', 'BMT']) && $this->trl1 !== '' && $this->evtTrailer = 'UNKNOWN') {
            if ($this->checkTrailerLocationMatch()) {
                $msg = $this->updateTrailer(false);
                if ($msg === 'Success') {
                    Log::debug('Trailer updated successfully');
                    PlatSciAutoprocess::query()->where('stp', $this->stp)->where('formid', $this->formId)->update(['trl_update' => 1]);
                } else {
                    Log::debug("Issue updating trailer  {$msg}");
                }
            } else {
                Log::debug('Trailer location does not match company location, cannot update trailer.');
            }
        }
        $trlmis = $this->checkTrailerMismatch();
        if ($trlmis !== 'pass') {
            if ($trlmis === 'cdmiss') {
                $msg = 'Converter required but not provided';
            } else {
                $msg = "Trailer Mismatch. \n Message Trailer1: {$this->trl1} Trailer2: {$this->trl2} CD: {$this->cd}";
            }
            (new PlatformSci)->sendMessageToFleet($this->drv, $this->trc, $this->cmp, $msg, $this->type, $this->mov, $this->leg, now(), $this->errorCount, $this->stp, $this->formId);
            $this->errorCount++;
        }
        if (in_array($this->evt, ['LLD', 'HPL', 'HLT'])) {
            $this->checkHazmat();
        }
        if (in_array($this->dest, ['LTL', 'NA', ''])) {
            $this->checkBOLCity();
        }
        if ($this->bol !== '' && ! in_array($this->evt, ['XDL', 'XDU'])) {
            if ($this->addref()) {
                $this->denormalizerefnum();
            }
        }
        if ($this->wgt > 1) {
            $this->updateStopPcsWgt();
        }
        if ($this->errorCount <= 1) {
            PlatSciAutoprocess::query()->where('stp', $this->stp)->where('formid', $this->formId)->update(['procd' => 1]);
        }
    }

    private function checkUpdateSeals()
    {
        if ($this->seal1 !== '') {
            PlatformSci::updateSeal($this->hs1, $this->seal1, $this->stp, $this->stops, $this->ord);
        }
        if ($this->seal2 !== '') {
            PlatformSci::updateSeal($this->hs2, $this->seal2, $this->stp, $this->stops, $this->ord);
        }
        if ($this->seal3 !== '') {
            PlatformSci::updateSeal($this->hs3, $this->seal3, $this->stp, $this->stops, $this->ord);
        }
    }

    private function checkPUCodeMismatch(): bool
    {
        if ($this->pucode === 'Live Load' && $this->evt !== 'LUL') {
            return true;
        }
        if (in_array($this->pucode, ['Preload', 'Hook Loaded Trailer']) && $this->evt !== 'LLD') {
            return true;
        }

        return false;
    }

    private function checkTrailerLocationMatch(): bool
    {
        return false;
        ///need code
    }

    private function updateTrailer(bool $b): string
    {
        return 'Success';
        //need code
    }

    private function checkTrailerMismatch(): string
    {
        return 'pass';
        //need code
    }

    private function checkHazmat()
    {
        //need code
    }

    private function checkBOLCity()
    {
        //need code
    }

    private function addref(): bool
    {
        //need code
        return false;
    }

    private function denormalizerefnum()
    {
        //need code
    }

    private function updateStopPcsWgt()
    {
        //need code
    }
}
