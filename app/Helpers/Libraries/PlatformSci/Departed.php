<?php

namespace App\Helpers\Libraries\PlatformSci;

use App\Mail\PlatSci_Departed;
use App\Models\bison\MailRecipients;
use App\Models\bison\PlatSciAutoprocess;
use App\Models\psbison\BisonAuCplocations;
use App\Models\psbison\Stops;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class Departed
{
    private mixed $body;
    private mixed $mov;
    private mixed $ord;
    private mixed $leg;
    private mixed $stp;
    private mixed $drv;
    private mixed $trc;
    private mixed $formId;
    private mixed $msgdt;
    private mixed $formName;
    /**
     * @var \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    private array|\Illuminate\Database\Eloquent\Collection $stops;
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
    private mixed $seq;
    private string $nextevt;
    private string $nextcmp;
    private string $nextdt;
    private int $key;

    public function __construct(mixed $data)
    {
        //build all values needed to process message
        [$this->body, $this->mov, $this->ord, $this->leg, $this->stp, $this->drv, $this->trc, $this->formId,$this->formName] = PlatformSci::buildAllValuesNeededToProcessMessage($data);
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
        $this->seq = $this->stops[$this->key]->stp_mfh_sequence;
        // Check for next stop if it exists, and assign these variables.
        $nextstp = PlatformSci::getNextStopifExists($this->stops, $this->key);
        $this->nextevt = $nextstp ? $nextstp->stp_event : '';
        $this->nextcmp = $nextstp ? $nextstp->cmp_id : '';
        $this->nextdt = $nextstp ? $nextstp->stp_arrivaldate : '';
    }

    /**
     * @throws Exception
     */
    public function Process_Depart(): void
    {
        // Add message to tracking table
        PlatformSci::messageReceived($this->stp, $this->mov, $this->leg, $this->trc, $this->drv, $this->evt, $this->formName, $this->formId);

        // Check if an email needs to be sent
        if ($this->nextevt === 'DLT') {
            if (BisonAuCplocations::where('cmp_id', '=', $this->nextcmp)->exists()) {
                $this->sendCPRailEmail();
            }
        }

        $res = $this->validateDepart();
        if ($res === 'Pass') {
            $this->updateDepart(0);
            Log::debug("Depart For Tractor:{$this->trc}, Move:{$this->mov}, Stop:{$this->stp} updated with time:{$this->msgdt}");
            if ($this->evt === 'DLT') {
                if ($this->checkAndUpdateDummyLeg() === true) {
                    Log::debug("Dummy Leg for Move: {$this->mov} updated");
                    PlatSciAutoprocess::where('stp', $this->stp)->where('formid', 2)->update(['dummyleg' => 1]);
                }
            }
        } else {
            $this->DealWithError($res, 'DEP');
        }
    }

    public function sendCPRailEmail(): void
    {
        // Build array of potential recipients
        $recip = ['imtracing@bisontransport.com'];
        if (in_array($this->nextcmp, ['CPRPIT', 'CPIEDM', 'CPRCAL03', 'CPIREG', 'CPRWIN05', 'CNIWIN01', 'CNIEDM01', 'CNICAL01', 'CNISUR01'])) {
            $recip[] = 'IMWest@bisontransport.com';
        } elseif (in_array($this->nextcmp, ['CPRVAU', 'CPRLAC', 'CNISTL', 'CNIBRA01'])) {
            $recip[] = 'IMeast@bisontransport.com';
        } else {
            //query needed select members from bison..mailrecipients where id=203
            //grab semicolon seperated values and make an array
            $mailrecipients = explode(';', MailRecipients::find(203)->value('members'));
            $recip[] = $mailrecipients;
        }

        //Send email to each recipient individually
        foreach ($recip as $rec) {
            Mail::to($rec)->send(new PlatSci_Departed($this->mov, $this->nextcmp, $this->ord, $this->trc, $this->nextdt));
        }
        Log::debug("CP/CN Email sent Move: {$this->mov}, Truck: {$this->trc}");
    }

    //    public function previousBillablesOpen(mixed $stp): bool
    //    {
    //        I don't think i need this function after reassessing the logic
    //        //check that the pickups and billables are updated before we decide to update nonbillables
    //        return true;
    //    }

    public function reprocess(): bool
    {
        //validatedepart again to see if updating nonbillables has fixed the issue
        $result = $this->validateDepart();
        //if it has return 'PASS' UpdateDepart updarr = 0 and return true
        if (in_array($result, ['PASS', 'ARRERR'])) {
            $updarr = $result === 'ARRERR' ? 1 : 0;
            $this->updateDepart($updarr);

            return true;
        }

        return false;
    }

    public function updateAnyNonBillablesLeftOpen(string $res): void
    {
        if ((new PlatformSci)->lookForNBToUpdate($this->stops, $this->msgdt, $this->stp, $this->leg) && ! ($this->reprocess())) {
            Log::debug("Error skipped Trc: {$this->trc}, Move: {$this->mov}, Stop: {$this->stp},Event: {$this->evt} Error: {$res}");
            PlatformSci::MessageError($this->stp, $this->formId, $res, 1, true);
        }
    }

    /**
     * @throws Exception
     */
    public function DealWithError(string $res, string $typ): void
    {
        if (in_array($res, ['MOVERR', 'UNKTRL', 'PRVLEG', 'PRVTIM', 'PRVTIMIGN', 'PRVXDL', 'XDUNXT']) && in_array($this->evt, ['RTP', 'NBCST', 'WSH', 'UNA'])) {
            Log::debug("Error Skipped Trc: {$this->trc}, Move: {$this->mov}, Stop: {$this->stp}, Event: {$this->evt}, Error: {$res}");
            //set skip to true and don't send message to fleet.
            PlatformSci::MessageError($this->stp, $this->formId, $res, 1, true);

            return;
        }
        if (in_array($res, ['ARRERR', 'ARRDT']) && ! in_array($this->evt, ['HPL', 'LLD', 'LUL', 'DUL', 'DRL'])) {
            //depart can be updated as long as we also update the arrival time set updarr = 1
            $this->updateDepart(1);
            Log::debug("Depart for Trc: {$this->trc}, Move: {$this->mov}, Stop: {$this->stp}, updated arrive and depart with time: {$this->msgdt}");

            return;
        }
        if ($res === 'PRVSTP') {
            $this->updateAnyNonBillablesLeftOpen($res);

            return;
        }
        // No specific thing to do, so we send a message anyway.
        (new PlatformSci)->SendMessageToFleet($this->drv, $this->trc, $this->cmp, $res, $typ, $this->mov, $this->leg, $this->msgdt, 1, $this->stp, $this->formId);
    }

    private function validateDepart(): string
    {
        $result = DB::connection('psbison')->select('exec bison_au_psdepart_v2 ?,?,?,?,?,?', [$this->stp, $this->mov, $this->leg, $this->trc, $this->drv, $this->msgdt]);

        return get_object_vars($result[0])[''];
    }

    private function updateDepart(int $updarr): void
    {
        //call bison_au_PSDepartUpd @stp,@mov,@leg,@ord,@evt,@trc,@drv,@dt,@upd
        DB::connection('psbison')->select('exec bison_au_PSDepartUpd ?,?,?,?,?,?,?,?,?,?',
            [$this->stp, $this->mov, $this->leg, $this->ord, $this->evt, $this->trc, $this->drv, $this->msgdt, $updarr]);
        PlatSciAutoprocess::where('stp', $this->stp)->where('formid', $this->formId)->update(['procd' => 1]);
    }

    private function checkAndUpdateDummyLeg(): bool
    {
        $checkStops = stops::with('event')->where('mov_number', $this->mov)->where('stp_arrivaldate', '>', $this->msgdt)->orderby('stp_arrivaldate')->get();

        $checkKey = $checkStops->search(function ($stop) {
            return $stop->stp_number == $this->stp;
        });

        $nextstp = PlatformSci::getNextStopifExists($checkStops, $checkKey);
        if ($nextstp->event->evt_carrier === 'TURNPIKE') {
            $i = 1;
            foreach ($checkStops as $stop) {
                $this->msgdt = $this->msgdt . addminutes($i);
                if ($nextstp->event->evt_carrier === 'TURNPIKE') {
                    $nextstp->stp_status = 'DNE';
                    $nextstp->stp_departure_status = 'DNE';
                    $nextstp->event->evt_status = 'DNE';
                    $nextstp->event->evt_departure_status = 'DNE';
                    $nextstp->stp_arrivaldate = $this->msgdt;
                    $nextstp->event->evt_startdate = $this->msgdt;
                    $nextstp->stp_departuredate = $this->msgdt;
                    $nextstp->event->evt_enddate = $this->msgdt;
                }
                (new PlatformSci)->UpdateMove($this->mov);
                $i++;
                //now grab the next stop
                $nextstp = PlatformSci::getNextStopifExists($checkStops, $nextstp);
            }

            return true;
        }

        return false;
    }
}
