<?php

namespace App\Helpers\Libraries\PlatformSci;

use App\Helpers\Constants\StopEventTypes;
use App\Models\bison\PlatSciAutoprocess;
use App\Models\psbison\ManpowerProfile;
use App\Models\psbison\ReferenceNumber;
use App\Models\psbison\Stops;
use App\Models\tranzactor\Transaction;
use DateMalformedStringException;
use DateTime;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PlatformSci
{
    public static function messageReceived($stp, $mov, $leg, $trc, $drv, $evt, $FormName, $formid): void
    {
        $msgtype = in_array($evt, StopEventTypes::DROPEVENTS) ? 'UNLOAD' : 'LOAD';
        PlatSciAutoprocess::query()->create([
            'stp' => $stp,
            'leg' => $leg,
            'mov' => $mov,
            'evt' => $evt,
            'trc' => $trc,
            'drv' => $drv,
            'formname' => $FormName,
            'formid' => $formid,
            'recd' => 1,
            'dt' => date('Y-m-d H:i:s'),
            'messagetype' => $msgtype,
        ]);
        Log::debug("Message received: {$mov} / {$trc} / {$leg} / {$stp} / {$drv} / {$FormName} / {$evt}");
    }

    public static function buildAllValuesNeededToProcessMessage($data): array
    {
        Log::debug($data->Body);
        $body = explode('^', $data->Body);
        $mov = $body[0];
        $ord = $body[1];
        $leg = $body[2];
        $stp = $body[3];
        $drv = $data->Driver;
        $formId = $data->FormNumber;
        $formName = $data->Subject;
        $trc = in_array($drv, StopEventTypes::TESTDRIVERS) ? $data->FromUser : $data->Tractor;

        return [$body, $mov, $ord, $leg, $stp, $drv, $trc, $formId, $formName];
    }

    public static function MessageError(int $stp, string $formid, string $res, int $errorcount, bool $skip): void
    {
        $platau = PlatSciAutoprocess::where('stp', $stp)->where('formid', $formid);
        if ($skip) {
            $platau->update(['procd' => 2]);

            return;
        }
        if ($errorcount === 1) {
            $platau->update(['err' => $res]);

            return;
        }
        if ($errorcount === 2) {
            $platau->update(['err2' => $res]);

            return;
        }
        if ($errorcount === 3) {
            $platau->update(['err3' => $res]);

            return;
        }
        if ($errorcount === 4) {
            $platau->update(['err4' => $res]);
        }
    }

    /**
     * @param  Collection<Stops>  $stops
     */
    public static function getNextStopifExists(Collection $stops, int $key)
    {
        // Ensure that there are more stops after the key
        if ($stops->count() <= $key) {
            return null;
        }

        foreach ($stops as $key_loop => $stop) {
            // Skip over the previous stops, we only want to process the preceding stop to our initial key
            if ($key_loop <= $key) {
                continue;
            }

            // Ensure that the stop is billable
            if (! in_array($stop->stp_event, StopEventTypes::IGNOREEVENTS['notdriverupdated'])) {
                return $stop;
            }
        }

        // If no stop is a billable, return null for safety.
        return null;
    }

    public static function getPriorNonBillableStopIfExists($stops, $seq)
    {
        // if $key === 0 there are no previous stops
        if ($seq === 0) {
            return null;
        }

        foreach ($stops as $key_loop => $stop) {
            // loop until current stop, we only want to udpate prior events
            if ($key_loop >= $seq) {
                continue;
            }

            // Ensure that the stop is nonbillable and not already departed
            if ($stop->stp_mfh_sequence < $seq && in_array($stop->stp_event, StopEventTypes::IGNOREEVENTS['notdriverupdated']) && $stop->stp_departure_status !== 'DNE') {
                return $stop;
            }
        }

        return null; // If no stop is a billable, return null
    }

    public static function previousBillablesOpen($stops, $seq): bool
    {
        // if $key === 0 there are no previous stops
        if ($seq === 0) {
            return false;
        }

        foreach ($stops as $key_loop => $stop) {
            // loop until current stop, we only want to update prior events
            if ($key_loop >= $seq) {
                continue;
            }

            // Ensure that the stop is nonbillable and not already departed
            if ($stop->stp_mfh_sequence < $seq && in_array($stop->stp_event, ['BMT', 'HPL', 'LLD', 'HLT', 'BBT', 'HCT', 'HMT', 'XDL', 'LUL']) && $stop->stp_departure_status !== 'DNE') {
                return true;
            }
        }

        return false; // If no stop is a billable, return null
    }

    public static function sendTMFleetQueue($flt, $subject, $msg): void
    {
        $uniqueid = $flt . '-' . date('YmdHis');
        DB::connection('psbison')->select('exec bisontm_asyncmessage_fleet ?,?,?,?', [$flt, $uniqueid, $subject, $msg]);
    }

    public static function sendErrorToTrcHistory($leg, $trc, $flt, $subject, $msg): void
    {
        DB::connection('psbison')->select('exec bisontm_sendError ?,?,?,?,?', [$leg, $trc, $flt, $subject, $msg]);
    }

    public static function QuickSendTMFleetQueue(string $recip, string $subject, string $message): void
    {
        $uniqueid = $recip . '-' . date('YmdHis');
        DB::connection('psbison')->select('exec bisontm_asyncmessage_fleet ?,?,?,?', [$recip, $uniqueid, $subject, $message]);
    }

    public static function updateSeal(bool $highSecurity, string $seal, int $stp, Collection $stops, int $ord): void
    {
        if (in_array($seal, StopEventTypes::DONOTUPDATESEAL) || strlen($seal) < 3) {
            Log::debug("Seal number: {$seal} is not valid, not updating");

            return;
        }
        $nbcst = PlatformSci::getNBCSTStop($stops);
        if ($nbcst > 0 && $highSecurity) {
            PlatformSci::addSeal($nbcst, $highSecurity, $seal, $ord);

            return;
        }
        PlatformSci::addSeal($stp, $highSecurity, $seal, $ord);
    }

    public static function getNBCSTStop(Collection $stops): int
    {
        $stop = $stops->where('stp_event', 'NBCST')->first();
        if (! $stop) {
            return 0;
        }

        return $stop->stp_number;
    }

    public static function addSeal(int $stp, bool $highSecurity, string $seal, int $ord): void
    {
        $referenceSequence = ReferenceNumber::query()->where('ref_tablekey', $stp)->orderBy('ref_sequence', 'desc')->first();
        if ($highSecurity) {
            $ref = ReferenceNumber::query()->where('ref_tablekey', $stp)->where('ref_type', 'TLSEAL')->where('ref_number', $tseal)->first();
        } else {
            $ref = ReferenceNumber::query()->where('ref_tablekey', $stp)->where('ref_number', $seal)->first();
        }
        if (! $ref) {
            ReferenceNumber::query()->create([
                'ref_tablekey' => $stp,
                'ref_sequence' => $referenceSequence + 1,
                'ref_type' => $highSecurity ? 'TLSEAL' : 'SEAL',
                'ref_number' => $seal,
                'ref_table' => 'stops',
                'ref_typedesc' => $highSecurity ? 'CT_TPAT' : 'SEAL#',
                'ord_hdrnumber' => $ord,
            ]);
        }
    }

    public function main(): void
    {
        $transaction = new Transaction;
        $records = $transaction->batch_process();
        //Log::debug('Processing ' . count($records) . ' records');
        foreach ($records as $record) {
            try {
                Log::debug('Processing OID: ' . $record->OID);
                Log::debug($record->Content);
                $data = json_decode($record->Content);

                if ($data->FormNumber === '2') {
                    (new Departed($data))->Process_Depart();
                }
                if ($data->FormNumber === '3') {
                    (new Pickup($data))->Process_Pickup();
                }
                if ($data->FormNumber === '5') {
                    (new Unload($data))->Process_Unload();
                }
                if ($data->FormNumber === '6') {
                    (new AxleWeights($data))->Process_AxleWeights();
                }
                if ($data->FormNumber === '115') {
                    (new Arrived($data))->Process_Arrived();
                }
                if ($data->FormNumber === '124') {
                    (new ETAPTA($data))->Process_ETAPTA();
                }
            } catch (Exception $e) {
                Log::error("Error processing OID: {$record->OID} Error: {$e->getMessage()}");

                continue;
            }
        }
    }

    /**
     * @throws Exception
     */
    public function sendMessageToFleet(string $drv, string $trc, string $cmp, string $err, string $typ, int $mov, int $leg, string $dt, int $errorcount, int $stp, int $formid): void
    {
        $msg = '';
        $flt = $this->getFleet($drv);
        if (empty($flt)) {
            Log::debug("Fleet not found for driver: {$drv}");
            throw new Exception("Fleet not found for driver: {$drv}");
        }
        //Log::debug('$flt: ' . $flt.' $err: '.$err.' $typ: '.$typ.' $mov: '.$mov.' $leg: '.$leg.' $dt: '.$dt.' $errorcount: '.$errorcount.' $stp: '.$stp.' $formid: '.$formid);
        if ($typ === 'DEP') {
            $subject = "{$trc} MOV:{$mov} FLT:{$flt} DEPART MSG ERROR";
            $msg = 'Error on Depart message \n _';
        }
        if ($typ === 'PU') {
            $subject = "{$trc} MOV:{$mov} PICKUP CODE Mismatch";
            $msg = "Error on Pickup message \n _ {$err}";
            $err = 'PUCODE';
        }
        if ($typ === 'MATCH') {
            $subject = "{$trc} MOV:{$mov} Trailer Mismatch";
            $msg = "Error on Pickup message \n _ {$err}";
            $err = 'MATCH';
        }
        if ($typ === 'UL') {
            $subject = "{$trc} MOV:{$mov} Unload Code Mismatch";
            $msg = 'Error on Unload message \n _';
            $err = 'DRPMISMATCH';
        }
        if (in_array($typ, ['ETA', 'PTA'])) {
            $subject = "{$drv} FLT:{$flt} MOV:{$mov} {$typ} Error";
            $msg = "Error on ETA/PTA message \n _{$err}";
            $err = 'ETAPTA';
        }
        if ($typ === 'ARR') {
            $subject = "{$trc} MOV:{$mov} FLT:{$flt} ARRIVE MSG ERROR";
            $msg = 'Error on Arrive message \n _';
        }
        //set each message based on the returned validation error
        if ($err === 'MOVERR') {
            $msg .= 'Move number is incorrect,driver or tractor are not in the system under this move number. \n ';
        }
        if ($err === 'LATE') {
            $msg .= 'Message datetime will make stop late. Manual update required. \n ';
        }
        if ($err === 'LATEPU') {
            $msg .= 'Late to pickup, may require LRW. \n ';
        }
        if ($err === 'POSSLATE') {
            $msg .= 'Late Pickup may make delivery late. \n ';
        }
        if ($err === 'PRVLEG') {
            $msg .= 'Previous leg is incomplete for one of the assets on this move. (Tractor/Driver/Trailer) \n ';
        }
        if ($err === 'PRVSTP') {
            $msg .= 'Previous stop is incomplete on this move. \n ';
        }
        if ($err === 'PRVTIM') {
            $msg .= 'Previous stop times conflict with arrive time. \n ';
        }
        if ($err === 'PRVXDL') {
            $msg .= 'Crossdock Move prior to depart conflicts with departure time or is not complete. \n ';
        }
        if ($err === 'UNKTRL') {
            $msg .= 'Trailer is Unknown \n ';
        }
        if ($err === 'ARRDT') {
            $msg .= 'Date before Stop arrival date. \n ';
        }
        if ($err === 'ARRERR') {
            $msg .= 'Arrive is not updated. \n ';
        }
        if ($err === 'DEPPRVSTP') {
            $msg .= 'Previous stop times conflict with departure time. \n';
        }
        if ($err === 'XDUNXT') {
            $msg .= 'Start time of the next leg on one or both orders is prior to the Message datetime. \n ';
        }
        //add some info to each message except etapta
        if ($err !== 'ETAPTA') {
            $msg .= "Move: {$mov} \n Driver: {$drv} \n Tractor: {$trc} \n Company: {$cmp} \n ";
            if ($typ !== 'PU') {
                $msg .= "MessageDate: {$dt} \n ";
            }
        }
        $msg .= 'Manual Update is Required';
        Log::debug($msg);
        $this->sendTMFleetQueue($flt, $subject, $msg);
        $msg = $this->prepend_string($msg, '_'); //need to append to the beginning of the message
        $this->sendErrorToTrcHistory($leg, $trc, $flt, $subject, $msg);
        $this->MessageError($stp, $formid, $err, $errorcount, false);
    }

    public function prepend_string($string, $prepend): string
    {
        return $prepend . $string;
    }

    public function UpdateMove($mov): void
    {
        DB::connection('psbison')->select('exec update_move ?', [$mov]);
    }

    public function getFleet(string $drv): ?string
    {
        $fleet = manpowerprofile::where('mpp_id', $drv)->value('mpp_fleet');

        return in_array($fleet, ['T2', 'T3', 'T4']) ? 'T1' : $fleet;
    }

    /**
     * @param  Collection<Stops>  $stops
     */
    public function lookForNBToUpdate(Collection $stops, Datetime $msgdt, int $stp, int $leg): bool
    {
        //find Nonbillable stops that are not updated and update return false if none found or none updated. If found update and return true
        $nb_index = $this->getNonBillableIndex($stops);
        if (is_null($nb_index)) {
            return false;
        }

        $current_index = $this->getCurrentIndex($stops, $stp);
        $max_index = $stops->count();
        $interval = 2;
        foreach ($stops as $key => $stop) {
            if ($key >= $nb_index && $key <= $current_index && $msgdt <= $stop->stp_arrivaldate) {
                $this->AdjustStopTimesBack($stop, $msgdt, -$interval);
            }

            if ($key > $current_index && $key <= $max_index && $msgdt >= $stop->stp_arrivaldate) {
                $this->AdjustStopTimesBack($stop, $msgdt, $interval);
            }
            $interval++;
        }

        Stops::query()->where('stp_event', StopEventTypes::IGNOREEVENTS['notdriverupdated'])
            ->whereNot('stp_departure_status', 'DNE')
            ->where('lgh_number', $leg)
            ->where('stp_mfh_sequence', '<', $current_index + 1)
            ->update([
                'stp_status' => 'DNE',
                'stp_departure_status' => 'DNE',
                'evt_status' => 'DNE',
                'evt_departure_status' => 'DNE',
            ]);

        return true;
    }

    /**
     * @param  Collection<Stops>  $stops
     */
    private function getNonBillableIndex(Collection $stops): ?int
    {
        foreach ($stops as $key => $stop) {
            if (in_array($stop->stp_event, StopEventTypes::IGNOREEVENTS['notdriverupdated']) && $stop->stp_departure_status !== 'DNE') {
                return $key;
            }
        }

        return null;
    }

    /**
     * @param  Collection<Stops>  $stops
     */
    private function getCurrentIndex(Collection $stops, int $stp): ?int
    {
        foreach ($stops as $key => $stop) {
            if ($stop->stp_number == $stp) {
                return $key;
            }
        }

        return null;
    }

    /**
     * @param  Model<Stops>  $stop
     *
     * @throws DateMalformedStringException
     */
    private function AdjustStopTimesBack(Model $stop, DateTime $msgdt, int $interval): void
    {
        $date = new DateTime;
        $stop->stp_arrivaldate = $msgdt->modify($interval);
        $stop->stp_departuredate = $msgdt->modify($interval + 1);
        $stop->save();
    }
}
