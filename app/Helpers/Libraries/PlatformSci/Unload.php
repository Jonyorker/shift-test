<?php

namespace App\Helpers\Libraries\PlatformSci;

use App\Models\bison\PlatSciAutoprocess;
use App\Models\psbison\BisonRepTrailerLocations;
use App\Models\psbison\Stops;
use Exception;
use Illuminate\Support\Facades\Log;

class Unload
{
    private string $body;
    private int $mov;
    private int $ord;
    private int $leg;
    private int $stp;
    private string $drv;
    private string $trc;
    private int $formId;
    private string $drpcode;
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
    /**
     * @var \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed
     */
    private mixed $appt;
    private string $nextevt;
    private string $yardcode;
    private string $seal;
    private string $paperwork;
    private string $type;
    private string $fleet;

    private int $errorCount = 1;

    public function __construct(mixed $data)
    {
        //build all values needed to process message
        [$this->body, $this->mov, $this->ord, $this->leg, $this->stp, $this->drv, $this->trc, $this->formId,$this->formName] = PlatformSci::buildAllValuesNeededToProcessMessage($data);
        $this->drpcode = $this->body[4];
        $this->yardcode = $this->body[5];
        $this->seal = $this->body[6];
        $this->paperwork = $this->body[7];

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
        $this->type = 'UL';
        // Check for next stop if it exists, and assign these variables.
        $nextstp = PlatformSci::getNextStopifExists($this->stops, $this->key);
        $this->nextevt = $nextstp ? $nextstp->stp_event : '';
        $this->fleet = (new PlatformSci)->getfleet($this->drv);
    }

    /**
     * @throws Exception
     */
    public function Process_Unload(): void
    {
        PlatformSci::messageReceived($this->stp, $this->mov, $this->leg, $this->trc, $this->drv, $this->evt, $this->formName, $this->formId);
        Log::debug("Processing Unload message for Mov:{$this->mov}, Truck:{$this->trc}");
        if ($this->seal != '' && $this->evt === 'LUL') {
            Log::debug("Updating seal number: {$this->seal}");
            PlatformSci::updateSeal(false, $this->seal, $this->stp, $this->stops, $this->ord);
        }
        if (in_array($this->evt, ['DLT', 'XDU']) && $this->yardcode != '') {
            $this->checkYardCodeMismatch();
        }
        $mismatch = $this->checkULCodeMismatch();
        if ($mismatch) {
            $msg = "Unload code mismatch. UL code: {$this->drpcode} and event: {$this->evt}.";
            (new PlatformSci)->sendMessageToFleet($this->drv, $this->trc, $this->cmp, $msg, $this->type, $this->mov, $this->leg, now(), $this->errorCount, $this->stp, $this->formId);
            $this->errorCount++;
        }
        if ($this->errorCount <= 1) {
            PlatSciAutoprocess::where('stp', $this->stp)->where('formid', $this->formId)->update(['procd' => 1]);
        }
    }

    private function checkYardCodeMismatch(): void
    {
        $yard = BisonRepTrailerLocations::query()->where('cmp', $this->cmp)->first();
        if (! $yard) {
            Log::debug("No yard found for company: {$this->cmp}");

            return;
        }
        if ($this->cmp != $this->yardcode) {
            Log::debug("Yard code mismatch for company: {$this->cmp}, received: {$this->yardcode}");
            $msg = "Unload message for move: {$this->mov} has been updated, but yard entered does not match TMW \n Yard on msg: {$this->yardcode} \n Yard in TMW: {$this->cmp} \n Please investigate or follow up with driver.";
            $subject = "Possible Yard Code Mismatch: Trc: {$this->trc} Mov: {$this->mov}";
            PlatformSci::sendTMFleetQueue($this->fleet, $subject, $msg);
            $msg = (new PlatformSci)->prepend_string($msg, '_');
            PlatformSci::sendErrorToTrcHistory($this->leg, $this->trc, $this->fleet, $subject, $msg);
            PlatformSci::MessageError($this->stp, $this->formId, 'YRDMISMATCH', $this->errorCount, false);
            $this->errorCount++;
        }
    }

    private function checkULCodeMismatch(): bool
    {
        if ($this->drpcode === 'LUL' && in_array($this->evt, ['EMT', 'DMT', 'DUL', 'DRL'])) {
            return true;
        }
        if (in_array($this->drpcode, ['DRL', 'DUL', 'DLT', 'EMT', 'XDU']) && $this->evt === 'LUL') {
            return true;
        }
        if ($this->drpcode === 'EBT' && $this->evt !== 'EBT') {
            return true;
        }

        return false;
    }
}
