<?php

namespace Database\Factories\bisonweb;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bisonweb\UserList>
 */
class UserListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'formatted_name' => fake()->name(),
            'reporting_name' => fake()->name(),
            'aka_name' => fake()->name(),
            'birth_date' => fake()->dateTimeThisCentury(),
            'gender_code' => fake()->randomElement(['male', 'female']),
            'middle_name' => fake()->firstName(),
        ];
    }
}
