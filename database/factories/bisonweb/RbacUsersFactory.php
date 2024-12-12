<?php

namespace Database\Factories\bisonweb;

use App\Services\SimpleHasher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bisonweb\RbacUsers>
 */
class RbacUsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $first_name = fake()->firstName;
        $last_name = fake()->lastName;
        $password = new SimpleHasher;

        return [
            'rbac_product_id' => 1,
            'is_active' => 1,
            'email' => fake()->email(),
            'password' => $password->make('password'),
            'ip_address' => null,
            'last_login' => fake()->dateTimeThisMonth(),
            'first_name' => $first_name,
            'last_name' => $last_name,
            'formatted_name' => $first_name . ' ' . $last_name,
            'formatted_name_reversed' => $last_name . ' ' . $first_name,
            'aka_name' => null,
            'user_id' => strtoupper(substr($last_name, 0, 3) . substr($first_name, 0, 1)),
            'password_reset' => 0,
            'force_password_reset' => 0,
            'force_email_reset' => 0,
        ];
    }
}
