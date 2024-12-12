<?php

namespace Database\Factories\psbison;

use Illuminate\Database\Eloquent\Factories\Factory;

class BisonWeightUpdatesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mov' => $this->faker->randomNumber(7),
            'ord' => $this->faker->randomNumber(7),
            'trc' => $this->faker->randomNumber(4),
            'wgt' => $this->faker->randomNumber(5),
            'dt' => $this->faker->dateTime(),
            'msg' => $this->faker->randomElement(['LDCALL', 'AXLE']),
            'steers' => $this->faker->randomNumber(5),
            'drives' => $this->faker->randomNumber(5),
            'trailer' => $this->faker->randomNumber(5),
            'fuellevel' => $this->faker->randomElement([1, 2, 3]),
            'bogeys' => $this->faker->randomElement([null, 41, 40]),
        ];
    }
}
