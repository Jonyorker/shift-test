<?php

namespace Database\Factories\bisonweb;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => $this->faker->unique()->randomDigitNotNull(),
            'login_id' => $this->faker->randomDigitNotNull(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'formatted_name' => $this->faker->word(),
            'formatted_name_reversed' => $this->faker->word(),
            'aka_name' => $this->faker->word(),
            'org_level_one_name' => $this->faker->word(),
            'org_level_one_code' => $this->faker->word(),
            'org_level_two_name' => $this->faker->word(),
            'org_level_two_code' => $this->faker->word(),
            'org_level_three_name' => $this->faker->word(),
            'org_level_three_code' => $this->faker->word(),
            'organization_code' => $this->faker->word(),
            'organization_name' => $this->faker->word(),
            'job_title' => $this->faker->jobTitle(),
            'job_code' => $this->faker->word(),
            'shift' => $this->faker->word(),
            'terminal' => $this->faker->word(),
            'office_number' => $this->faker->word(),
            'extension' => $this->faker->word(),
            'home_number' => $this->faker->word(),
            'cell_number' => $this->faker->word(),
            'email_address' => $this->faker->email(),
            'fleet' => $this->faker->word(),
            'parking_tag' => $this->faker->word(),
            'is_after_hours' => $this->faker->word(),
            'out_of_office' => $this->faker->dateTime(),
            'hired_date' => $this->faker->dateTime(),
            'birth_date' => $this->faker->dateTime(),
            'status' => $this->faker->word(),
            'termination_date' => $this->faker->dateTime(),
            'is_supervisor' => $this->faker->randomNumber(),
            'supervisors' => $this->faker->word(),
            'reports_to' => $this->faker->word(),
            'directly_reports_to' => $this->faker->word(),
            'touch_date' => $this->faker->dateTime(),
            'is_driver_supervisor' => $this->faker->randomNumber(),
            'is_mechanic' => $this->faker->randomNumber(),
            'is_warehouse' => $this->faker->randomNumber(),
            'ldap_id' => $this->faker->randomDigitNotNull(),
            'payroll_identifier' => $this->faker->word(),
        ];
    }
}
