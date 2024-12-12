<?php

namespace Database\Factories\bison;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmailNotifyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => $this->faker->address(),
            'subject' => $this->faker->word(),
            'message' => $this->faker->text(),
            'data' => $this->faker->text(),
            'onbehalfof' => $this->faker->word(),
        ];
    }
}
