<?php

namespace App\Helpers\Libraries\PlatformSci;

use App\Models\bison\PlatSciAutoprocess;
use App\Models\psbison\Stops;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Arrived
{
    /**
     * @var \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    private array|\Illuminate\Database\Eloquent\Collection $stops;
    private mixed $body;
    private mixed $mov;
    private mixed $ord;
    private mixed $leg;
    private mixed $stp;
    private mixed $drv;
    private mixed $trc;
    private mixed $formId;
    private mixed $msgdt;
    private int $key;
    /**
     * @var \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed
     */
    private mixed $evt;
    /**
     * @var \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed
     */
    private mixed $cmp;
    /**
     * @var \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed
     */
    private mixed $appt;
    /**
     * @var mixed|null
     */
    private mixed $nextstp;
    private string $nextevt;
    private mixed $formName;

    public function __construct(mixed $data)
    {
        //build all values needed to process message
        [$this->body, $this->mov, $this->ord, $this->leg, $this->stp,$this->drv, $this->trc,$this->formId,$this->formName] = PlatformSci::buildAllValuesNeededToProcessMessage($data);
        $this->msgdt = $this->body[4];

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
        $this->appt = $this->stops[$this->key]->stp_schdtlatest;
        $this->nextstp = PlatformSci::getNextStopifExists($this->stops, $this->key);
        $this->nextevt = $this->nextstp ? $this->nextstp->stp_event : '';
    }

    public function Process_Arrived(): void
    {
        PlatformSci::messageReceived($this->stp, $this->mov, $this->leg, $this->trc, $this->drv, $this->evt, $this->formName, $this->formId);
        //allow for arrive date to be 5 min after an appt time and just update to that appt time.
        //xdebug_break();

        //        if (in_array($this->evt, ['LUL', 'DRL', 'DUL', 'HPL', 'LLD']) && ($this->msgdt < $this->appt . addminutes(6) && $this->msgdt > $this->appt . addminutes(1))) {
        //            $this->msgdt = $this->appt;
        //        }
        if ($this->evt === 'XDL' && $this->nextevt === 'XDL') {
            PlatformSci::MessageError($this->stp, $this->formId, '2XDL', 1, true);
            Log::debug("Error skipped, Trc: {$this->trc} Stp: {$this->stp} Evt: {$this->evt} Error: 2XDL");

            return;
        }
        $validationResult = $this->validateArrive();
        if ($validationResult === 'PASS') {
            $this->UpdateArrive();
        } else {
            $this->DealWithError($validationResult, 'ARR', 0);
        }
    }

    /**
     * @throws Exception
     */
    public function DealWithError(string $res, string $typ, int $seq): void
    {
        if ($this->shouldError($res)) {
            if ($res === 'PRVTIMIGN') {
                PlatformSci::MessageError($this->stp, $this->formId, $res, 1, true);
                Log::debug("Error skipped, Trc: {$this->trc} Stp: {$this->stp} Evt: {$this->evt} Error: {$res}");

                return;
            }
            //if we can't ignore the error, send it to the fleet
            (new PlatformSci)->SendMessageToFleet($this->drv, $this->trc, $this->cmp, $res, $typ, $this->mov, $this->leg, $this->msgdt, 1, $this->stp, $this->formId);
        }
    }

    private function validateArrive(): string
    {
        $result = DB::connection('psbison')->select('exec bison_au_ValidatePSarrive ?,?,?,?,?,?,?', [$this->stp, $this->ord, $this->mov, $this->leg, $this->trc, $this->drv, $this->msgdt]);

        return get_object_vars($result[0])[''];
    }

    private function shouldError(string $res): bool
    {
        return in_array($this->evt, ['HPL', 'LLD', 'DRL', 'DUL', 'LUL'])
            && (in_array($res, ['PRVTIMIGN', 'MOVERR', 'LATE', 'LATEPU', 'POSSLATE', 'PRVLEG', 'PRVTIM', 'ARRPRVSTP', 'PRVSTP'])
            || PlatformSci::previousBillablesOpen($this->stops, $this->key)
            || ((new PlatformSci)->lookForNBToUpdate($this->stops, $this->msgdt, $this->stp, $this->leg)) && (! $this->reprocess())
            );
    }

    private function UpdateArrive(): void
    {
        DB::connection('psbison')->select('exec bison_au_PSArriveUpd ?,?,?,?', [$this->stp, $this->mov, $this->leg, $this->msgdt]);
        PlatSciAutoprocess::where('stp', $this->stp)->where('formid', $this->formId)->update(['procd' => 1]);
        Log::debug("Arrive for Trc: {$this->trc} Stp: {$this->stp} Evt: {$this->evt} Updated with time: {$this->msgdt}");
    }

    private function reprocess(): bool
    {
        if ($this->validateArrive() === 'Pass') {
            $this->UpdateArrive();

            return true;
        }

        return false;
    }
}
