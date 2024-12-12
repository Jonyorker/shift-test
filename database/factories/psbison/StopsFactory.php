<?php

namespace Database\Factories\psbison;

use Faker\Provider\en_CA\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\psbison\Stops>
 */
class StopsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ord_hdrnumber' => fake()->numberBetween(6000000, 7000000),
            'stp_number' => fake()->numberBetween(60000000, 70000000),
            'cmp_id' => fake()->randomElement(['NORMOO05',	'YYCHP', 'BC33']),
            'stp_region1' => fake()->randomElement(['CCA',	'WCA', 'WUSBC']),
            'stp_region2' => fake()->randomElement(['SK',	'ABS', 'BC']),
            'stp_region3' => fake()->randomElement(['SK2',	'AB', 'BC2']),
            'stp_city' => fake()->randomElement([246875, 310163, 229914]),
            'stp_state' => Address::provinceAbbr(),
            'stp_schdtearliest' => fake()->randomElement(['2024-10-15 10:00:00.000', '2024-10-15 15:00:00.000', '2024-10-15 15:15:00.000', '2024-10-16 22:22:00.000']),
            'stp_origschdt' => fake()->randomElement(['2024-09-27 11:11:00.000', '2024-09-25 08:05:00.000', '2024-09-25 17:00:00.000']),
            'stp_arrivaldate' => fake()->dateTimeBetween('-2 days', 'now'),
            'stp_departuredate' => fake()->randomElement(['2024-10-22 15:00:00.000', '2024-10-23 22:22:00.000', '2024-10-24 15:15:00.000']),
            'stp_reasonlate' => 'UNK',
            'stp_schdtlatest' => fake()->randomElement(['2024-10-22 15:00:00.000', '2024-10-23 22:22:00.000', '2024-10-24 15:15:00.000']),
            'lgh_number' => fake()->randomElement([26261366, 26261367, 26261368]),
            'mfh_number' => 0,
            'stp_type' => fake()->randomElement(['NONE', 'PUP']),
            'stp_paylegpt' => 'Y',
            'stp_sequence' => fake()->randomElement([0, 1, 2]),
            'stp_region4' => fake()->randomElement(['UNK', 'CALCTY', 'DELCTY']),
            'trl_id' => 'UNKNOWN',
            'stp_mfh_sequence' => fake()->numberBetween(1, 6),
            'stp_event' => fake()->randomElement(['HPL', 'DLT', 'HLT', 'LUL']),
            'stp_ord_mileage' => fake()->numberBetween(0, 1000),
            'stp_lgh_mileage' => fake()->numberBetween(0, 1000),
            'mov_number' => fake()->numberBetween(17409580, 17509580),
            'timestamp' => fake()->dateTimeThisMonth(),
            'stp_loadstatus' => fake()->randomElement(['LD', 'BT']),
            'stp_weightunit' => 'LBS',
            'cmd_code' => fake()->randomElement(['PORKFRZ', 'UNKNOWN']),
            'stp_description' => fake()->randomElement(['PORK FROZEN', 'UNKNOWN']),
            'stp_countunit' => 'PCS',
            'cmp_name' => substr(fake()->company(), 0, 30),
            'stp_status' => 'OPN',
            'stp_reasonlate_depart' => 'UNK',
            'skip_trigger' => 0,
            'stp_volumeunit' => 'CUB',
            'stp_type1' => '1',
            'stp_osd' => 0,
            'stp_phonenumber' => fake()->phoneNumber(),
            'stp_delayhours' => 0,
            'stp_zipcode' => Address::postcode(),
            'stp_OOA_stop' => 0,
            'stp_address' => substr(fake()->address(), 0, 40),
            'stp_transfer_stp' => 0,
            'stp_phonenumber2' => fake()->phoneNumber(),
            'stp_activitystart_dt' => fake()->randomElement(['2024-10-22 15:00:00.000', '2024-10-23 22:22:00.000', '2024-10-24 15:15:00.000']),
            'stp_activityend_dt' => fake()->randomElement(['2024-10-22 15:00:00.000', '2024-10-23 22:22:00.000', '2024-10-24 15:15:00.000']),
            'stp_departure_status' => fake()->randomElement(['OPN', 'DNE']),
            'stp_trip_mileage' => fake()->numberBetween(0, 1000),
            'stp_country' => 'CAN',
            'stp_loadingmetersunit' => 'UNK',
            'stp_detstatus' => 0,
            'stp_est_drv_time' => fake()->numberBetween(0, 1000),
            'last_updateby' => fake()->randomElement(['TDOLT', 'DLAV', 'JYORK']),
            'last_updatedate' => fake()->dateTimeThisMonth(),
            'stp_lgh_mileage_mtid' => fake()->numberBetween(0, 40000),
            'stp_count2' => 0,
            'stp_countunit2' => 'PCS',
            'stp_ord_toll_cost' => fake()->numberBetween(0, 100),
            'stp_ord_mileage_mtid' => fake()->numberBetween(0, 40000),
            'last_updatebydepart' => fake()->randomElement(['TDOLT', 'DLAV', 'JYORK']),
            'last_updatedatedepart' => fake()->dateTimeThisMonth(),
            'stp_showas_cmpid' => fake()->randomElement(['NORMOO05',	'YYCHP', 'BC33']),
            'stp_origarrival' => fake()->randomElement(['2024-10-22 15:00:00.000', '2024-10-23 22:22:00.000', '2024-10-24 15:15:00.000']),
            'stp_type2' => 'UNK',
            'stp_type3' => 'UNK',
            'stp_firm_appt_flag' => 'N',
            'stp_delay_eligible' => 'N',
            'stp_mileagetype' => '',
            'stp_span_days' => '0',
            'RailServiceLevel' => 'UNK',
            'stp_CustomerRequestDate' => fake()->dateTimeThisMonth(),
            'stp_empty_split' => 'N',
            'stp_optimizationdate' => fake()->randomElement(['2024-10-22 15:00:00.000', '2024-10-23 22:22:00.000', '2024-10-24 15:15:00.000']),
            'stp_app_eqcodes' => 'UNK',
        ];
    }
}
