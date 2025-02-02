<?php

namespace Database\Factories\psbison;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrailerProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $trl = fake()->randomElement(['91522', '91505', '82203', '82216', '82018', '70934C', '30735', '30641', '19004']);

        return [
            'trl_number' => $trl,
            'trl_owner' => 'UNKNOWN',
            'trl_make' => 'WABASH',
            'trl_model' => fake()->randomElement(['V-DRY', 'REFR', 'T-REEF', 'T-DRY', 'T-HEAT']),
            'trl_currenthub' => 0,
            'trl_type1' => fake()->randomElement(['V-DRY', 'REFR', 'T-REEF', 'T-DRY', 'T-HEAT']),
            'trl_type2' => fake()->randomElement(['HORZR2', '2FOOT ', null, '4FOOT ']),
            'trl_type3' => fake()->randomElement(['ROLLER', 'WOOD ', null, 'STEEL ']),
            'trl_type4' => fake()->randomElement(['BISCAN', 'BISUSA', 'CUSUSA', 'PARTCA']),
            'trl_year' => null,
            'trl_startdate' => $this->faker->dateTime(),
            'trl_retiredate' => $this->faker->dateTime(),
            'trl_mpg' => 0,
            'trl_company' => 'UNK',
            'trl_fleet' => 'UNK',
            'trl_division' => 'UNK',
            'trl_terminal' => fake()->randomElement(['REG', 'WIN', 'IND', 'MIS', 'CAL']),
            'cmp_id' => 'UNKNOWN',
            'cty_code' => 0,
            'trl_ilt' => fake()->randomElement(['Y', 'N']),
            'trl_mtwgt' => 0,
            'trl_grosswgt' => 0,
            'trl_axles' => 0,
            'trl_ht' => 0,
            'trl_len' => 0,
            'trl_wdth' => 0,
            'trl_licstate' => fake()->randomElement(['AB', 'ME', 'MB', 'ON']),
            'trl_licnum' => fake()->randomElement(['t86075', '24-81297', '276064C', '276034C']),
            'trl_status' => fake()->randomElement(['AVL', 'INSHOP', 'PLN', 'STD']),
            'trl_serial' => fake()->randomElement(['1JJV532D9LL195521', '1JJV532D8LL195526', 'NONBISON', '1JJV532D0LL195536']),
            'trl_dateacquired' => $this->faker->dateTime(),
            'trl_origcost' => 0,
            'trl_opercostmile' => 0,
            'trl_sch_date' => $this->faker->dateTime(),
            'trl_sch_cmp_id' => 'UNKNOWN',
            'trl_sch_city' => 0,
            'trl_sch_status' => 'AVL',
            'trl_avail_date' => $this->faker->dateTime(),
            'trl_avail_cmp_id' => fake()->randomElement(['HANSCH05', 'ASSCAL02', 'CHEOMA02', 'SAPSKO02']),
            'trl_avail_city' => fake()->numberBetween(2010, 400000),
            'trl_fix_record' => null,
            'trl_last_stop' => null,
            'trl_misc1' => null,
            'trl_misc2' => null,
            'trl_misc3' => null,
            'trl_misc4' => null,
            'trl_id' => $trl,
            'trl_cur_mileage' => null,
            'trl_bmp_pathname' => null,
            'timestamp' => 0x00000004F5836491,
            'trl_actg_type' => 'N',
            'trl_ilt_scac' => '',
            'trl_updatedby' => 'BRIAN',
            'trl_updateon' => $this->faker->dateTime(),
            'trl_tareweight' => 0,
            'trl_kp_to_axle1' => 0,
            'trl_axle1_to_axle2' => 0,
            'trl_axle2_to_axle3' => 0,
            'trl_axle3_to_axle4' => 0,
            'trl_comprt1_size_wet' => 0,
            'trl_comprt2_size_wet' => 0,
            'trl_comprt3_size_wet' => 0,
            'trl_comprt4_size_wet' => 0,
            'trl_comprt5_size_wet' => 0,
            'trl_comprt6_size_wet' => 0,
            'trl_comprt1_uom_wet' => 'UNK',
            'trl_comprt2_uom_wet' => 'UNK',
            'trl_comprt3_uom_wet' => 'UNK',
            'trl_comprt4_uom_wet' => 'UNK',
            'trl_comprt5_uom_wet' => 'UNK',
            'trl_comprt6_uom_wet' => 'UNK',
            'trl_comprt1_bulkhead' => 'SINGLE',
            'trl_comprt2_bulkhead' => 'SINGLE',
            'trl_comprt3_bulkhead' => 'SINGLE',
            'trl_comprt4_bulkhead' => 'SINGLE',
            'trl_comprt5_bulkhead' => 'SINGLE',
            'trl_tareweight_uom' => 'UNK',
            'trl_kp_to_axle1_uom' => 'UNK',
            'trl_axle1_to_axle2_uom' => 'UNK',
            'trl_axle2_to_axle3_uom' => 'UNK',
            'trl_axle3_to_axle4_uom' => 'UNK',
            'trl_createdate' => $this->faker->dateTime(),
            'trl_pupid' => 'UNKNOWN',
            'trl_axle4_to_axle5' => 0,
            'trl_axle4_to_axle5_uom' => 'UNK',
            'trl_lastaxle_to_rear' => 0,
            'trl_lastaxle_to_rear_uom' => 'UNK',
            'trl_nose_to_kp' => 0,
            'trl_nose_to_kp_uom' => 'UNK',
            'trl_total_no_of_compartments' => 0,
            'trl_total_trailer_size_wet' => 0,
            'trl_uom_wet' => 'UNK',
            'trl_total_trailer_size_dry' => 0,
            'trl_uom_dry' => 'UNK',
            'trl_comprt1_size_dry' => 0,
            'trl_comprt2_size_dry' => 0,
            'trl_comprt3_size_dry' => 0,
            'trl_comprt4_size_dry' => 0,
            'trl_comprt5_size_dry' => 0,
            'trl_comprt6_size_dry' => 0,
            'trl_comprt1_uom_dry' => 'UNK',
            'trl_comprt2_uom_dry' => 'UNK',
            'trl_comprt3_uom_dry' => 'UNK',
            'trl_comprt4_uom_dry' => 'UNK',
            'trl_comprt5_uom_dry' => 'UNK',
            'trl_comprt6_uom_dry' => 'UNK',
            'trl_bulkhead_comprt1_thick' => 0,
            'trl_bulkhead_comprt2_thick' => 0,
            'trl_bulkhead_comprt3_thick' => 0,
            'trl_bulkhead_comprt4_thick' => 0,
            'trl_bulkhead_comprt5_thick' => 0,
            'trl_bulkhead_comprt1_thick_uom' => 'UNK',
            'trl_bulkhead_comprt2_thick_uom' => 'UNK',
            'trl_bulkhead_comprt3_thick_uom' => 'UNK',
            'trl_bulkhead_comprt4_thick_uom' => 'UNK',
            'trl_bulkhead_comprt5_thick_uom' => 'UNK',
            'trl_quickentry' => 'N',
            'trl_wash_status' => 'N',
            'trl_manualupdate' => 'N',
            'trl_exp1_date' => $this->faker->dateTime(),
            'trl_exp2_date' => null,
            'trl_last_cmd' => null,
            'trl_last_cmd_ord' => fake()->numberBetween(6100000, 7100000),
            'trl_last_cmd_date' => $this->faker->dateTime(),
            'trl_palletcount' => null,
            'bis_laststatuschgby' => 'SYSTEMSLINK',
            'bis_laststatusdate' => $this->faker->dateTime(),
            'trl_customer_flag' => 'N',
            'trl_billto_parent' => 'UNKNOWN',
            'trl_booked_revtype1' => 'UNK',
            'trl_next_event' => 'UNK',
            'trl_next_cmp_id' => 'UNK',
            'trl_next_city' => 0,
            'trl_next_state' => 'XX',
            'trl_next_region1' => 'UNK',
            'trl_next_region2' => 'UNK',
            'trl_next_region3' => 'UNK',
            'trl_next_region4' => 'UNK',
            'trl_prior_event' => fake()->randomElement(['EMT', 'HLT', 'DRL', 'LUL', 'HPL']),
            'trl_prior_cmp_id' => fake()->randomElement(['SKYWES', '2', 'BC44', 'TJXDEL', 'MARCOL05']),
            'trl_prior_city' => fake()->numberBetween(2010, 400000),
            'trl_prior_state' => fake()->randomElement(['ON', 'AB', 'TX', 'BC', 'IA']),
            'trl_prior_region1' => fake()->randomElement(['CCA', 'US', 'ECA', 'WCA', 'WUSBC']),
            'trl_prior_region2' => fake()->randomElement(['ONMISS', 'ABS', 'USWEST', 'BC', 'USMW']),
            'trl_prior_region3' => fake()->randomElement(['MB', 'USNE', 'SON', 'BC2', 'USSC']),
            'trl_prior_region4' => fake()->randomElement(['UNK', 'EDMCTY', 'CALCTY', 'GTA', 'DELCTY']),
            'bison_avail_city' => fake()->numberBetween(2010, 400000),
            'bison_avail_date' => $this->faker->dateTime(),
            'bison_avail_status' => fake()->randomElement(['CMP', 'STD']),
            'bison_avail_cmp' => fake()->randomElement(['POTHER', 'HARAUB03', 'OSKUT', 'YYCHP', 'NIABLO']),
            'trl_accessorylist' => null,
            'trl_newused' => 1,
            'trl_gp_class' => 'UNK',
            'trl_worksheet_comment1' => null,
            'trl_worksheet_comment2' => null,
            'trl_loading_class' => 'UNK',
            'trl_axlgrp1_tarewgt' => 0,
            'trl_axlgrp1_grosswgt' => 0,
            'trl_axlgrp2_tarewgt' => 0,
            'trl_axlgrp2_grosswgt' => 0,
            'trl_exp1_enddate' => $this->faker->dateTime(),
            'trl_exp2_enddate' => null,
            'trl_gps_desc' => null,
            'trl_gps_date' => null,
            'trl_gps_latitude' => null,
            'trl_gps_longitude' => null,
            'trl_gps_odometer' => null,
            'trl_lifetimemileage' => null,
            'trl_branch' => 'UNKNOWN',
            'trl_liccountry' => 'CA',
            'trl_aceid' => null,
            'trl_aceidtype' => 'UNK',
            'trl_height' => null,
            'trl_width' => null,
            'trl_email' => null,
            'trl_equipmenttype' => 'TRAILER',
            'trl_prefix' => null,
            'trl_prior_cmp_othertype1' => 'UNK',
            'trl_next_cmp_othertype1' => 'UNK',
            'trl_capacity_wgt' => null,
            'trl_capacity_ldm' => null,
            'rowsec_rsrv_id' => $this->faker->randomDigitNotNull(),
            'trl_dwelltime' => null,
            'bison_last_carrier' => 'UNKNOWN',
            'bison_last_mov' => fake()->numberBetween(17510000, 17890000),
            'trl_useGeofencing' => null,
            'trl_gps_heading' => null,
            'trl_gps_speed' => null,
            'trl_validitychks' => 'Y',
            'trl_cmpt1_temp' => null,
            'trl_cmpt2_temp' => null,
            'trl_cmpt3_temp' => null,
            'trl_cmpt4_temp' => null,
            'trl_cmpt5_temp' => null,
            'trl_cmpt1_setpoint' => null,
            'trl_cmpt2_setpoint' => null,
            'trl_cmpt3_setpoint' => null,
            'trl_cmpt4_setpoint' => null,
            'trl_cmpt5_setpoint' => null,
            'trl_dischargetemp' => null,
            'trl_ambienttemp' => null,
            'trl_alarmstate' => null,
            'trl_cmpt1_desired_setpoint' => null,
            'trl_cmpt2_desired_setpoint' => null,
            'trl_cmpt3_desired_setpoint' => null,
            'trl_cmpt4_desired_setpoint' => null,
            'trl_cmpt5_desired_setpoint' => null,
            'trl_desired_setpoints_setby' => null,
            'trl_reeferpower' => null,
            'trl_mcommID' => null,
            'trl_mcommType' => null,
            'trl_reeferhist1' => null,
            'trl_reeferhist2' => null,
            'trl_ams_type' => null,
            'trl_unassigned_reasoncode' => 'UNK',
            'trl_unassigned_comments' => '',
            'trl_iso_code' => null,
            'PayScheduleId' => null,
            'trl_mobilecommaccount' => null,
            'trl_app_eqcodes' => null,
            'OriginDestinationOption' => null,
            'trl_use_rfid' => null,
            'trl_rfid_tag' => null,
            'trl_carrier' => null,
            'trl_double_bulk_head' => null,
            'trl_pump_unit' => null,
            'iso_code' => null,
            'trl_discharge_side' => null,
            'INS_TIMESTAMP' => $this->faker->dateTime(),
        ];
    }
}
