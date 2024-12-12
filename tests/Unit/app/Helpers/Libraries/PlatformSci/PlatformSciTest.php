<?php

namespace Tests\Unit\app\Helpers\Libraries\PlatformSci;

use App\Helpers\Constants\StopEventTypes;
use App\Helpers\Libraries\PlatformSci\PlatformSci;
use App\Models\bison\PlatSciAutoprocess;
use App\Models\psbison\Stops;
use App\Models\tranzactor\Transaction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use stdClass;
use Tests\TestCase;

class PlatformSciTest extends TestCase
{
    use RefreshDatabase;
    protected array $connectionsToTransact = ['bison', 'tranzactor'];

    public static function messageReceived_DataProvider(): array
    {
        $ran_drop = array_rand(StopEventTypes::DROPEVENTS);
        $ran_pick = array_rand(StopEventTypes::PICKUPEVENTS);

        return [
            [123, 234, 345, 456, 567, StopEventTypes::DROPEVENTS[$ran_drop], 678, 789, 'UNLOAD'],
            [123, 234, 345, 456, 567, StopEventTypes::PICKUPEVENTS[$ran_pick], 678, 789, 'LOAD'],
        ];
    }

    public static function MessageErrorTest_DataProvider(): array
    {
        return [
            [123, '2', 'res', 0, true, 'procd'],
            [234, '2', 'res1', 1, false, 'err'],
            [345, '2', 'res2', 2, false, 'err2'],
            [456, '2', 'res3', 3, false, 'err3'],
            [567, '2', 'res4', 4, false, 'err4'],
        ];
    }

    /**
     * @dataProvider messageReceived_DataProvider
     *
     * @test
     */
    public function messageReceived($stp, $mov, $leg, $trc, $drv, $evt, $FormName, $formid, $expected): void
    {
        PlatformSci::messageReceived($stp, $mov, $leg, $trc, $drv, $evt, $FormName, $formid);

        $message = PlatSciAutoprocess::query()->latest('id')->first();

        $this->assertEquals($message->messagetype, $expected);

    }

    /**
     * @test
     */
    public function buildAllValuesNeededToProcessMessage(): void
    {
        $data = new stdClass;
        $data->FormNumber = '2';
        $data->FromUser = 'MARR09';
        $data->Subject = 'Depart Stop';
        $data->Body = 'mov123^ord123^leg123^stp123^10/10/2024 10:25';
        $data->BodyFieldSeparator = '^';
        $data->CreatedDate = '2024-10-10T11:24:27-05:00';
        $data->TripId = '12345';
        $data->StopId = '23456';
        $data->Driver = 'MARR09';
        $data->Tractor = '78636';

        [$body, $mov, $ord, $leg, $stp, $drv, $trc, $formId, $formName] = PlatformSci::buildAllValuesNeededToProcessMessage($data);

        $this->assertEquals('mov123', $mov);
        $this->assertEquals('ord123', $ord);
        $this->assertEquals('leg123', $leg);
        $this->assertEquals('stp123', $stp);
        $this->assertEquals('MARR09', $drv);
        $this->assertEquals('78636', $trc);
        $this->assertEquals('2', $formId);
        $this->assertEquals('Depart Stop', $formName);

    }

    /**
     * @dataProvider MessageErrorTest_DataProvider
     *
     * @test
     */
    public function messageError(int $stp, string $formid, string $res, int $errorcount, bool $skip, string $field): void
    {
        $platau = PlatSciAutoprocess::factory()->create(['stp' => $stp, 'formid' => $formid]);

        PlatformSci::MessageError($stp, $formid, $res, $errorcount, $skip);

        $platau->refresh();

        if ($skip) {
            $this->assertEquals(2, $platau->$field);
        } else {
            $this->assertEquals($res, $platau->$field);
        }

    }

    /**
     * @test
     */
    public function getNextStopIfExists(): void
    {

        // This should return stop
        $stops = Stops::factory(5)->make();

        $result = PlatformSci::getNextStopifExists($stops, 0);

        $this->assertIsObject($result);
        $this->assertNotEmpty($result->stp_number);

        // This should return null

        $result = PlatformSci::getNextStopifExists($stops, 5);

        $this->assertNull($result);

        // This should also return null

        $stops = Stops::factory(5)->make(['stp_event' => StopEventTypes::IGNOREEVENTS['notdriverupdated'][0]]);

        $result = PlatformSci::getNextStopifExists($stops, 0);

        $this->assertNull($result);

    }

    /**
     * @test
     */
    public function transactionBatchProcess(): void
    {
        // Create records for test db

        \App\Models\tranzactor\Transaction::factory(20)->create();

        $transactionModel = new Transaction;

        // Verify Batch Process gets what we expect
        $records = $transactionModel->batch_process(0);

        // Ensure that we get some records
        $this->assertNotEmpty($records);

        // Grad first OID record, to use as offset to test offset parameter of batch_process
        $OID = $records->first()->OID;

        // Verify Batch Process gets what we expect
        $records_offset = $transactionModel->batch_process($OID + 1);

        // Assert that records_offset is less than $records
        $this->assertLessThan($records->count(), $records_offset->count());

    }
}
