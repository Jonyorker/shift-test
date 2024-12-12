<?php

namespace App\Console\Commands;

use App\Helpers\Libraries\RestAPI\RestAutoActualization;
use App\Models\psbison\City;
use App\Models\psbison\Stops;
use App\Models\sqlweb\datawarehouse\StopsAutoActualizationByTime;
use DateTime;
use DateTimeZone;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CheckStopsAutoActualization extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-stops-auto-actualization';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @throws Exception
     */
    public function handle(): void
    {
        $stopsAutoActualizationByTimeModel = new StopsAutoActualizationByTime;
        $stopsModel = new Stops;
        $restAutoActualizationModel = new RestAutoActualization;
        $now = strtotime('now');

        $records = $stopsAutoActualizationByTimeModel->getRecords($now);

        Log::debug($stopsModel->cmp_id);

        $stopNumbers = $records->pluck('stp_number') or throw new Exception('No Records');

        $checkRecords = $stopsModel->getStatusByStopNumbers($stopNumbers);

        //        foreach ($checkRecords as $stop) {
        //
        //            if ($stop->stp_departure_status !== 'DNE') {
        //                $updatedTime = convertTimezone($stop->stp_number);
        //
        //                $result = $restAutoActualizationModel->actualizeStop(
        //                    $records[$data[tbl_Stops::STP_NUMBER]][tbl_StopsAutoActualizationByTime::ORD_HDRNUMBER],
        //                    $records[$data[tbl_Stops::STP_NUMBER]][tbl_StopsAutoActualizationByTime::MOV_NUMBER],
        //                    $records[$data[tbl_Stops::STP_NUMBER]][tbl_StopsAutoActualizationByTime::STP_NUMBER],
        //                    null,
        //                    /** @phpstan-ignore-next-line */
        //                    $updatedTime
        //                );
        //            }
        //            if ($data[tbl_Stops::STP_DEPARTURE_STATUS] === 'DNE') {
        //                $stopsAutoActualizationByTimeModel->delete($records[$data[tbl_Stops::STP_NUMBER]][tbl_StopsAutoActualizationByTime::ID]);
        //            }
        //        }

        function convertTimezone(int $stpNumber): string
        {
            $stopsModel = new Stops;

            $stopResults = $stopsModel->getStpDeltaAndDst($stpNumber);

            $stpGmtDelta = (int) $stopResults[City::CTY_GMTDELTA];

            $stpDstApplies = (int) $stopResults[City::CTY_DSTAPPLIES];

            // Set the GMT offset for the stop
            $offset = ($stpGmtDelta - $stpDstApplies) * -1;
            $gmtOffset = ($offset >= 0 ? '+' : '-') . abs($offset);
            // Set the stop Time
            $stopsTime = new DateTime(date('Y-m-d H:i:s'));
            // Add the offset to the time
            $timeZone = new DateTimeZone("GMT{$gmtOffset}");
            $stopsTime->setTimezone($timeZone);

            return $stopsTime->format('Y-m-d H:i:s');
        }
    }
}
