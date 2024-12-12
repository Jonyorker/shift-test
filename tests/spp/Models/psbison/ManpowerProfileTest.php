<?php

namespace Tests\spp\Models\psbison;

use App\Models\psbison\Event;
use App\Models\psbison\LegHeader;
use App\Models\psbison\ManpowerProfile;
use PHPUnit\Framework\TestCase;

class ManpowerProfileTest extends TestCase
{
    /**
     * @test
     */
    public function legHeaders()
    {
        $manpower_profile = ManpowerProfile::factory()->create();
        LegHeader::factory()->create(['lgh_driver1' => $manpower_profile->mpp_id]);
        LegHeader::factory()->create(['lgh_driver2' => $manpower_profile->mpp_id]);

        $this->assertTrue($manpower_profile->legHeaders()->count() > 2);
    }

    /**
     * @test
     */
    public function events()
    {
        $manpower_profile = ManpowerProfile::factory()->create();
        Event::factory()->create(['evt_driver1' => $manpower_profile->mpp_id]);
        Event::factory()->create(['evt_driver2' => $manpower_profile->mpp_id]);

        $this->assertTrue($manpower_profile->events()->count() > 2);
    }
}
