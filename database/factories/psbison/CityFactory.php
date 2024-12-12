<?php

namespace Database\Factories\psbison;

use Faker\Provider\en_CA\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\psbison\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cty_code' => fake()->numberBetween(1, 1000),
            'cty_name' => substr(fake()->city(), 0, 18),
            'cty_state' => Address::provinceAbbr(),
            'cty_zip' => Address::postcode(),
            'cty_areacode' => null,
            'cty_splc' => null,
            'cty_county' => null,
            'cty_latitude' => Address::latitude(),
            'cty_longitude' => Address::longitude(),
            'cty_region1' => 'WCA',
            'cty_region2' => 'ABN',
            'cty_region3' => 'AB',
            'cty_region4' => 'UNK',
            'cty_nmstct' => fake()->city(),
            'timestamp' => fake()->dateTimeThisMonth(),
            'cty_comm_zone' => null,
            'cty_country' => 'CAN',
            'cty_updatedby' => null,
            'cty_updateddate' => null,
            'cty_createdate' => null,
            'rand_city' => null,
            'rand_state' => null,
            'rand_county' => null,
            'alk_city' => null,
            'alk_state' => null,
            'alk_county' => null,
            'cty_fuelcreate' => null,
            'bison_latitude' => intval(Address::latitude()),
            'bison_longitude' => intval(Address::longitude()),
            'bison_timezone' => 'MDT',
            'county_name' => null,
            'rand_county_name' => null,
            'alk_county_name' => null,
            'rand_verified' => null,
            'rand_verified_date' => null,
            'alk_verified' => null,
            'alk_verified_date' => null,
            'bison_USBorderCode' => null,
            'cty_GMTDelta' => 7,
            'cty_DSTApplies' => 'Y',
            'alk_region' => 'NA',
            'cty_TZMins' => null,
            'cty_countyfips' => null,
            'cty_statefips' => null,
            'cty_msa' => null,
            'cty_CityShort' => null,
            'cty_GeoCodeRequested' => null,
            'cty_ALK_FileValidatedYR' => null,
            'cty_splc_char' => null,
            'citypoint' => null,
            'INS_TIMESTAMP' => fake()->dateTimeThisMonth(),
        ];
    }
}
