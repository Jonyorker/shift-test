<?php

namespace Database\Factories\bison;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlatSciAutoprocessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'stp' => $this->faker->randomNumber(),
            'leg' => $this->faker->randomNumber(),
            'mov' => $this->faker->randomNumber(),
            'evt' => $this->faker->text(6),
            'trc' => $this->faker->text(6),
            'drv' => $this->faker->text(6),
            'formname' => $this->faker->text(6),
            'formid' => $this->faker->randomNumber(),
            'recd' => $this->faker->randomNumber(),
            'procd' => $this->faker->randomNumber(),
            'err' => $this->faker->text(6),
            'dt' => $this->faker->dateTime(),
            'messagetype' => $this->faker->text(6),
            'dummyleg' => $this->faker->randomNumber(),
            'err2' => $this->faker->text(6),
            'err3' => $this->faker->text(6),
            'err4' => $this->faker->text(6),
        ];
    }
}
