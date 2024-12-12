<?php

namespace Tests\Unit\app\Models\psbison;

use App\Models\psbison\LegHeader;
use App\Models\psbison\ManpowerProfile;
use App\Models\psbison\Stops;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LegHeaderTest extends TestCase
{
    use RefreshDatabase;
    protected array $connectionsToTransact = ['psbison'];

    /**
     * @test
     */
    public function manPowerProfile1()
    {
        $manpower_profile = ManpowerProfile::factory()->create();
        $LegHeader = LegHeader::factory()->create(['lgh_driver1' => $manpower_profile->mpp_id]);

        $this->assertTrue($LegHeader->manPowerProfile1()->exists());
    }

    /**
     * @test
     */
    public function manPowerProfile2()
    {
        $manpower_profile = ManpowerProfile::factory()->create();
        $LegHeader = LegHeader::factory()->create(['lgh_driver2' => $manpower_profile->mpp_id]);

        $this->assertTrue($LegHeader->manPowerProfile2()->exists());
    }

    /**
     * @test
     */
    public function stops()
    {
        $LegHeader = LegHeader::factory()->has(Stops::factory(5))->create();

        $this->assertTrue($LegHeader->stops()->exists());
    }
}
