<?php

namespace Database\Factories\tranzactor;

use App\Models\psbison\Event;
use App\Models\psbison\LegHeader;
use App\Models\psbison\ManpowerProfile;
use App\Models\psbison\Stops;
use App\Models\psbison\TractorProfile;
use App\Models\psbison\TrailerProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tranzactor\transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $manpower_profile = ManpowerProfile::factory()->create();
        $tractor_profile = TractorProfile::factory()->create();
        $trailer_profile = TrailerProfile::factory()->create();
        $legCreated = LegHeader::factory()->has(Stops::factory(5)->has(Event::factory()->count(1)))
            ->create(
                ['lgh_driver1' => $manpower_profile->mpp_id,
                    'lgh_tractor' => $tractor_profile->trc_number,
                    'lgh_primary_trailer' => $trailer_profile->trl_id,
                ]);

        $stops = Stops::where('lgh_number', $legCreated->lgh_number)->get();
        $stop = $stops->random();
        $trl = $stop->evt_trailer;
        $trc = $stop->evt_tractor;
        $drv = $stop->evt_driver;
        $ord = fake()->numberBetween(6000000, 7000000);
        $stp = $stop->stp_number;
        $mov = fake()->numberBetween(10000000, 20000000);
        $leg = $legCreated->lgh_number;
        $bodystart = $mov . '^' . $ord . '^' . $leg . '^' . $stp;
        $cmp = fake()->randomElement(['LARCHI02', '2', '7', '99', 'SUPCAL14']);
        //$trl = fake()->randomElement(['91020', '19071', '80501', '50133', '90830']);
        $trl2 = fake()->randomElement(['91020', '', '80501', '', '']);
        $cd = fake()->randomElement(['CD220', 'CD103', '', '', '']);
        $finaldest = fake()->randomElement(['CAL', 'WIN', 'EDM', 'SAS', 'REG']);
        $pucode = fake()->randomElement(['Hook Empty Trailer', 'Hook Preloaded Trailer', 'Live Load']);
        $bol = fake()->numberBetween(100000, 200000);
        $seal = fake()->numberBetween(1000, 20000);

        $content_Arrived = [
            'FormNumber' => '115',
            'FromUser' => $drv,
            'Subject' => 'Arrive at Stop',
            'Body' => $bodystart . '^10/10/2024 10:25',
            'BodyFieldSeparator' => '^',
            'CreatedDate' => '2024-10-10T11:24:27-05:00',
            'TripId' => $ord,
            'StopId' => $stp,
            'Driver' => $drv,
            'Tractor' => $trc,
        ];

        $content_Depart = [
            'FormNumber' => '2',
            'FromUser' => $drv,
            'Subject' => 'Depart Stop',
            'Body' => $bodystart . '^10/10/2024 10:25',
            'BodyFieldSeparator' => '^',
            'CreatedDate' => '2024-10-10T11:24:27-05:00',
            'TripId' => $ord,
            'StopId' => $stp,
            'Driver' => $drv,
            'Tractor' => $trc,
        ];

        $content_ETAPTA = [
            'FormNumber' => '124',
            'FromUser' => $drv,
            'Subject' => 'Update ETA/PTA',
            'Body' => $bodystart . '^' . $cmp . '^' . '10/10/2024' . '^' . '10:25' . '^' . '10/10/2024' . '^' . '10:35',
            'BodyFieldSeparator' => '^',
            'CreatedDate' => '2024-10-10T11:24:27-05:00',
            'TripId' => $ord,
            'StopId' => $stp,
            'Driver' => $drv,
            'Tractor' => $trc,
        ];

        $content_Pickup = [
            'FormNumber' => '3',
            'FromUser' => $drv,
            'Subject' => 'Pickup Information',
            'Body' => $bodystart . '^' . $trl . '^' . $trl2 . '^' . $cd . '^' . $finaldest . '^' . 'Yes' . '^' . $pucode . '^' . $bol . '^' . '100' . '^' . '25000' . '^' . $seal . '^' . 'false' . '^' . $seal . '^' . 'false' . '^' . $seal . '^' . 'false',
            'BodyFieldSeparator' => '^',
            'CreatedDate' => '2024-10-10T11:24:27-05:00',
            'TripId' => $ord,
            'StopId' => $stp,
            'Driver' => $drv,
            'Tractor' => $trc,
        ];

        $content_Unload = [
            'FormNumber' => '5',
            'FromUser' => $drv,
            'Subject' => 'Unloading Information',
            'Body' => $bodystart . '^LUL^^NA^',
            'BodyFieldSeparator' => '^',
            'CreatedDate' => '2024-10-10T11:24:27-05:00',
            'TripId' => $ord,
            'StopId' => $stp,
            'Driver' => $drv,
            'Tractor' => $trc,
        ];

        $content_Axle = [
            'FormNumber' => '6',
            'FromUser' => $drv,
            'Subject' => 'AXLE WEIGHTS',
            'Body' => $mov . '^' . $trl . '^11940^36180^36100^No^Full^41',
            'BodyFieldSeparator' => '^',
            'CreatedDate' => '2024-10-10T11:24:27-05:00',
            'TripId' => 0,
            'StopId' => 0,
            'Driver' => $drv,
            'Tractor' => $trc,
        ];

        return [
            'Content' => json_encode(fake()->randomelement([$content_Arrived, $content_Depart, $content_Unload, $content_Pickup, $content_ETAPTA, $content_Axle])),
            'DateTime' => fake()->dateTime(),
            'SentDateTime' => fake()->dateTime(),
            'Destination' => fake()->randomElement(['PlatSci_Outbound', 'PlatSci_Inbound']),
            'Direction' => fake()->randomElement([0, 1]),
            'DocumentType' => fake()->randomElement(['MobileComTrip', 'MobileComMessage', 'MobileComFormMessage']),
            'Source' => fake()->randomElement(['TmwSuite', 'Totalmail', 'PlatSci.workflow_task', 'PlatSci.workflow_job']),
            'TransactionSource' => fake()->randomElement(['TmwSuite_SendTrips', 'Totalmail_SendTransactionToTranzactor', 'PlatSci']),
            'TransactionStatus' => 0,
            'OptimisticLockField' => 0,
            'RetryCount' => 0,
        ];
    }
}
