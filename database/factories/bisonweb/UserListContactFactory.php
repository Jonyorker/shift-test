<?php

namespace Database\Factories\bisonweb;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bisonweb\UserListContact>
 */
class UserListContactFactory extends Factory
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
            'user_list_contact_type_id' => fake()->numberBetween(1, 10),
            'value' => fake()->randomElement([12345678901, 'example@gmail.com']),
            'addons' => fake()->randomElement([null, 1234]),
            'is_primary' => fake()->boolean(),
            'is_active' => fake()->boolean(),
            'country_iso_code' => fake()->countryISOAlpha3(),
        ];
    }
}
