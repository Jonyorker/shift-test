<?php

namespace tests\Unit\app\Models\sqlweb\datawarehouse;

use App\Models\sqlweb\datawarehouse\StopsAutoActualizationByTime;
use PHPUnit\Framework\TestCase;

class StopsAutoActualizationByTimeTest extends TestCase
{
    /**
     * @test
     */
    public function getRecords()
    {
        $result = (new StopsAutoActualizationByTime)->getRecords(null);

        $this->assertIsArray($result->toArray());

        $this->assertIsIterable($result);
    }
}
