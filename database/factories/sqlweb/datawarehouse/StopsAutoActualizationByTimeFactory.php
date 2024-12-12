<?php

namespace Database\Factories\sqlweb\datawarehouse;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\sqlweb\datawarehouse\StopsAutoActualizationByTime>
 */
class StopsAutoActualizationByTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $time = fake()->dateTimeThisMonth();

        return [
            'mov_number' => fake()->numberBetween(17409580, 17509580),
            'ord_hdrnumber' => fake()->numberBetween(6000000, 7000000),
            'lgh_number' => fake()->randomElement([26261366, 26261367, 26261368]),
            'stp_number' => fake()->numberBetween(6000000, 7000000),
            'stp_event' => fake()->randomElement(['HPL', 'DLT', 'HLT', 'LUL']),
            'process_on' => $time->modify('+15 minutes'),
            'created_date' => $time,
        ];
    }
}
