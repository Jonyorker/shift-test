<?php

namespace Database\Factories\bisonweb;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bisonweb\UserListAddress>
 */
class UserListAddressFactory extends Factory
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
            'address_line_1' => fake()->unique()->streetName(),
            'address_line_2' => fake()->unique()->streetAddress(),
            'city' => fake()->city(),
            'state' => 'idaho',
            'zip_code' => fake()->postcode(),
            'country' => fake()->country(),
            'is_primary' => fake()->boolean(),
            'is_active' => fake()->boolean(),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
        ];
    }
}
