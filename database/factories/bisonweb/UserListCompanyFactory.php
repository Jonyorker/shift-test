<?php

namespace Database\Factories\bisonweb;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bisonweb\UserListCompany>
 */
class UserListCompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_list_id' => fake()->numberBetween(1, 10),
            'company_id' => fake()->randomElement(['CAMBRA01', 'BISCAN', 'GOTNEW01']),
            'status' => fake()->randomElement(['ACTIVE', 'TERMINATED']),
            'hired_date' => fake()->dateTimeThisDecade(),
            'seniority_date' => fake()->dateTimeThisDecade(),
            'termination_date' => fake()->dateTimeThisDecade(),
        ];
    }
}
