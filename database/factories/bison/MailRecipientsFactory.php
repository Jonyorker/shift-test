<?php

namespace Database\Factories\bison;

use Illuminate\Database\Eloquent\Factories\Factory;

class MailRecipientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'keyname' => $this->faker->word(),
            'members' => $this->faker->word(),
            'note' => $this->faker->word(),
        ];
    }
}
