<?php

namespace Database\Factories\psbison;

use Illuminate\Database\Eloquent\Factories\Factory;

class BisonAuCplocationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cmp_id' => $this->faker->randomDigitNotNull(),
        ];
    }
}
