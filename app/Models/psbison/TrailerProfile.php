<?php

namespace App\Models\psbison;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $trl_number
 * @property string $trl_owner
 * @property string $trl_make
 * @property string $trl_model
 * @property int $trl_currenthub
 * @property string $trl_type1
 * @property string $trl_type2
 * @property string $trl_type3
 * @property string $trl_type4
 * @property int $trl_year
 * @property string $trl_startdate
 * @property string $trl_retiredate
 * @property float $trl_mpg
 * @property string $trl_company
 * @property string $trl_fleet
 * @property string $trl_division
 * @property string $trl_terminal
 * @property string $cmp_id
 * @property int $cty_code
 * @property string $trl_ilt
 * @property int $trl_mtwgt
 * @property int $trl_grosswgt
 * @property int $trl_axles
 * @property float $trl_ht
 * @property float $trl_len
 * @property float $trl_wdth
 * @property string $trl_licstate
 * @property string $trl_licnum
 * @property string $trl_status
 * @property string $trl_serial
 * @property string $trl_dateacquired
 * @property float $trl_origcost
 * @property float $trl_opercostmile
 * @property string $trl_sch_date
 * @property string $trl_sch_cmp_id
 * @property int $trl_sch_city
 * @property string $trl_sch_status
 * @property string $trl_avail_date
 * @property string $trl_avail_cmp_id
 * @property int $trl_avail_city
 * @property string $trl_fix_record
 * @property int $trl_last_stop
 * @property string $trl_misc1
 * @property string $trl_misc2
 * @property string $trl_misc3
 * @property string $trl_misc4
 * @property string $trl_id
 * @property int $trl_cur_mileage
 * @property string $trl_bmp_pathname
 * @property mixed $timestamp
 * @property string $trl_actg_type
 * @property string $trl_ilt_scac
 * @property string $trl_updatedby
 * @property string $trl_updateon
 * @property float $trl_tareweight
 * @property float $trl_kp_to_axle1
 * @property float $trl_axle1_to_axle2
 * @property float $trl_axle2_to_axle3
 * @property float $trl_axle3_to_axle4
 * @property int $trl_comprt1_size_wet
 * @property int $trl_comprt2_size_wet
 * @property int $trl_comprt3_size_wet
 * @property int $trl_comprt4_size_wet
 * @property int $trl_comprt5_size_wet
 * @property int $trl_comprt6_size_wet
 * @property string $trl_comprt1_uom_wet
 * @property string $trl_comprt2_uom_wet
 * @property string $trl_comprt3_uom_wet
 * @property string $trl_comprt4_uom_wet
 * @property string $trl_comprt5_uom_wet
 * @property string $trl_comprt6_uom_wet
 * @property string $trl_comprt1_bulkhead
 * @property string $trl_comprt2_bulkhead
 * @property string $trl_comprt3_bulkhead
 * @property string $trl_comprt4_bulkhead
 * @property string $trl_comprt5_bulkhead
 * @property string $trl_tareweight_uom
 * @property string $trl_kp_to_axle1_uom
 * @property string $trl_axle1_to_axle2_uom
 * @property string $trl_axle2_to_axle3_uom
 * @property string $trl_axle3_to_axle4_uom
 * @property string $trl_createdate
 * @property string $trl_pupid
 * @property float $trl_axle4_to_axle5
 * @property string $trl_axle4_to_axle5_uom
 * @property float $trl_lastaxle_to_rear
 * @property string $trl_lastaxle_to_rear_uom
 * @property float $trl_nose_to_kp
 * @property string $trl_nose_to_kp_uom
 * @property int $trl_total_no_of_compartments
 * @property float $trl_total_trailer_size_wet
 * @property string $trl_uom_wet
 * @property float $trl_total_trailer_size_dry
 * @property string $trl_uom_dry
 * @property int $trl_comprt1_size_dry
 * @property int $trl_comprt2_size_dry
 * @property int $trl_comprt3_size_dry
 * @property int $trl_comprt4_size_dry
 * @property int $trl_comprt5_size_dry
 * @property int $trl_comprt6_size_dry
 * @property string $trl_comprt1_uom_dry
 * @property string $trl_comprt2_uom_dry
 * @property string $trl_comprt3_uom_dry
 * @property string $trl_comprt4_uom_dry
 * @property string $trl_comprt5_uom_dry
 * @property string $trl_comprt6_uom_dry
 * @property float $trl_bulkhead_comprt1_thick
 * @property float $trl_bulkhead_comprt2_thick
 * @property float $trl_bulkhead_comprt3_thick
 * @property float $trl_bulkhead_comprt4_thick
 * @property float $trl_bulkhead_comprt5_thick
 * @property string $trl_bulkhead_comprt1_thick_uom
 * @property string $trl_bulkhead_comprt2_thick_uom
 * @property string $trl_bulkhead_comprt3_thick_uom
 * @property string $trl_bulkhead_comprt4_thick_uom
 * @property string $trl_bulkhead_comprt5_thick_uom
 * @property string $trl_quickentry
 * @property string $trl_wash_status
 * @property string $trl_manualupdate
 * @property string $trl_exp1_date
 * @property string $trl_exp2_date
 * @property string $trl_last_cmd
 * @property int $trl_last_cmd_ord
 * @property string $trl_last_cmd_date
 * @property int $trl_palletcount
 * @property string $bis_laststatuschgby
 * @property string $bis_laststatusdate
 * @property string $trl_customer_flag
 * @property string $trl_billto_parent
 * @property string $trl_booked_revtype1
 * @property string $trl_next_event
 * @property string $trl_next_cmp_id
 * @property int $trl_next_city
 * @property string $trl_next_state
 * @property string $trl_next_region1
 * @property string $trl_next_region2
 * @property string $trl_next_region3
 * @property string $trl_next_region4
 * @property string $trl_prior_event
 * @property string $trl_prior_cmp_id
 * @property int $trl_prior_city
 * @property string $trl_prior_state
 * @property string $trl_prior_region1
 * @property string $trl_prior_region2
 * @property string $trl_prior_region3
 * @property string $trl_prior_region4
 * @property int $bison_avail_city
 * @property string $bison_avail_date
 * @property string $bison_avail_status
 * @property string $bison_avail_cmp
 * @property string $trl_accessorylist
 * @property int $trl_newused
 * @property string $trl_gp_class
 * @property string $trl_worksheet_comment1
 * @property string $trl_worksheet_comment2
 * @property string $trl_loading_class
 * @property float $trl_axlgrp1_tarewgt
 * @property float $trl_axlgrp1_grosswgt
 * @property float $trl_axlgrp2_tarewgt
 * @property float $trl_axlgrp2_grosswgt
 * @property string $trl_exp1_enddate
 * @property string $trl_exp2_enddate
 * @property string $trl_gps_desc
 * @property string $trl_gps_date
 * @property int $trl_gps_latitude
 * @property int $trl_gps_longitude
 * @property int $trl_gps_odometer
 * @property float $trl_lifetimemileage
 * @property string $trl_branch
 * @property string $trl_liccountry
 * @property string $trl_aceid
 * @property string $trl_aceidtype
 * @property float $trl_height
 * @property float $trl_width
 * @property string $trl_email
 * @property string $trl_equipmenttype
 * @property string $trl_prefix
 * @property string $trl_prior_cmp_othertype1
 * @property string $trl_next_cmp_othertype1
 * @property float $trl_capacity_wgt
 * @property float $trl_capacity_ldm
 * @property int $rowsec_rsrv_id
 * @property float $trl_dwelltime
 * @property string $bison_last_carrier
 * @property int $bison_last_mov
 * @property string $trl_useGeofencing
 * @property float $trl_gps_heading
 * @property int $trl_gps_speed
 * @property string $trl_validitychks
 * @property float $trl_cmpt1_temp
 * @property float $trl_cmpt2_temp
 * @property float $trl_cmpt3_temp
 * @property float $trl_cmpt4_temp
 * @property float $trl_cmpt5_temp
 * @property float $trl_cmpt1_setpoint
 * @property float $trl_cmpt2_setpoint
 * @property float $trl_cmpt3_setpoint
 * @property float $trl_cmpt4_setpoint
 * @property float $trl_cmpt5_setpoint
 * @property float $trl_dischargetemp
 * @property float $trl_ambienttemp
 * @property string $trl_alarmstate
 * @property float $trl_cmpt1_desired_setpoint
 * @property float $trl_cmpt2_desired_setpoint
 * @property float $trl_cmpt3_desired_setpoint
 * @property float $trl_cmpt4_desired_setpoint
 * @property float $trl_cmpt5_desired_setpoint
 * @property string $trl_desired_setpoints_setby
 * @property string $trl_reeferpower
 * @property string $trl_mcommID
 * @property string $trl_mcommType
 * @property int $trl_reeferhist1
 * @property int $trl_reeferhist2
 * @property string $trl_ams_type
 * @property string $trl_unassigned_reasoncode
 * @property string $trl_unassigned_comments
 * @property string $trl_iso_code
 * @property int $PayScheduleId
 * @property int $trl_mobilecommaccount
 * @property string $trl_app_eqcodes
 * @property string $OriginDestinationOption
 * @property string $trl_use_rfid
 * @property string $trl_rfid_tag
 * @property string $trl_carrier
 * @property string $trl_double_bulk_head
 * @property string $trl_pump_unit
 * @property string $iso_code
 * @property string $trl_discharge_side
 * @property string $INS_TIMESTAMP
 */
class TrailerProfile extends Model
{
    use HasFactory;

    const CREATED_AT = 'INS_TIMESTAMP';

    const UPDATED_AT = null;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TrailerProfile';

    protected $fillable = ['trl_number', 'trl_owner', 'trl_make', 'trl_model', 'trl_currenthub', 'trl_type1', 'trl_type2', 'trl_type3', 'trl_type4', 'trl_year', 'trl_startdate', 'trl_retiredate', 'trl_mpg', 'trl_company', 'trl_fleet', 'trl_division', 'trl_terminal', 'cmp_id', 'cty_code', 'trl_ilt', 'trl_mtwgt', 'trl_grosswgt', 'trl_axles', 'trl_ht', 'trl_len', 'trl_wdth', 'trl_licstate', 'trl_licnum', 'trl_status', 'trl_serial', 'trl_dateacquired', 'trl_origcost', 'trl_opercostmile', 'trl_sch_date', 'trl_sch_cmp_id', 'trl_sch_city', 'trl_sch_status', 'trl_avail_date', 'trl_avail_cmp_id', 'trl_avail_city', 'trl_fix_record', 'trl_last_stop', 'trl_misc1', 'trl_misc2', 'trl_misc3', 'trl_misc4', 'trl_id', 'trl_cur_mileage', 'trl_bmp_pathname', 'timestamp', 'trl_actg_type', 'trl_ilt_scac', 'trl_updatedby', 'trl_updateon', 'trl_tareweight', 'trl_kp_to_axle1', 'trl_axle1_to_axle2', 'trl_axle2_to_axle3', 'trl_axle3_to_axle4', 'trl_comprt1_size_wet', 'trl_comprt2_size_wet', 'trl_comprt3_size_wet', 'trl_comprt4_size_wet', 'trl_comprt5_size_wet', 'trl_comprt6_size_wet', 'trl_comprt1_uom_wet', 'trl_comprt2_uom_wet', 'trl_comprt3_uom_wet', 'trl_comprt4_uom_wet', 'trl_comprt5_uom_wet', 'trl_comprt6_uom_wet', 'trl_comprt1_bulkhead', 'trl_comprt2_bulkhead', 'trl_comprt3_bulkhead', 'trl_comprt4_bulkhead', 'trl_comprt5_bulkhead', 'trl_tareweight_uom', 'trl_kp_to_axle1_uom', 'trl_axle1_to_axle2_uom', 'trl_axle2_to_axle3_uom', 'trl_axle3_to_axle4_uom', 'trl_createdate', 'trl_pupid', 'trl_axle4_to_axle5', 'trl_axle4_to_axle5_uom', 'trl_lastaxle_to_rear', 'trl_lastaxle_to_rear_uom', 'trl_nose_to_kp', 'trl_nose_to_kp_uom', 'trl_total_no_of_compartments', 'trl_total_trailer_size_wet', 'trl_uom_wet', 'trl_total_trailer_size_dry', 'trl_uom_dry', 'trl_comprt1_size_dry', 'trl_comprt2_size_dry', 'trl_comprt3_size_dry', 'trl_comprt4_size_dry', 'trl_comprt5_size_dry', 'trl_comprt6_size_dry', 'trl_comprt1_uom_dry', 'trl_comprt2_uom_dry', 'trl_comprt3_uom_dry', 'trl_comprt4_uom_dry', 'trl_comprt5_uom_dry', 'trl_comprt6_uom_dry', 'trl_bulkhead_comprt1_thick', 'trl_bulkhead_comprt2_thick', 'trl_bulkhead_comprt3_thick', 'trl_bulkhead_comprt4_thick', 'trl_bulkhead_comprt5_thick', 'trl_bulkhead_comprt1_thick_uom', 'trl_bulkhead_comprt2_thick_uom', 'trl_bulkhead_comprt3_thick_uom', 'trl_bulkhead_comprt4_thick_uom', 'trl_bulkhead_comprt5_thick_uom', 'trl_quickentry', 'trl_wash_status', 'trl_manualupdate', 'trl_exp1_date', 'trl_exp2_date', 'trl_last_cmd', 'trl_last_cmd_ord', 'trl_last_cmd_date', 'trl_palletcount', 'bis_laststatuschgby', 'bis_laststatusdate', 'trl_customer_flag', 'trl_billto_parent', 'trl_booked_revtype1', 'trl_next_event', 'trl_next_cmp_id', 'trl_next_city', 'trl_next_state', 'trl_next_region1', 'trl_next_region2', 'trl_next_region3', 'trl_next_region4', 'trl_prior_event', 'trl_prior_cmp_id', 'trl_prior_city', 'trl_prior_state', 'trl_prior_region1', 'trl_prior_region2', 'trl_prior_region3', 'trl_prior_region4', 'bison_avail_city', 'bison_avail_date', 'bison_avail_status', 'bison_avail_cmp', 'trl_accessorylist', 'trl_newused', 'trl_gp_class', 'trl_worksheet_comment1', 'trl_worksheet_comment2', 'trl_loading_class', 'trl_axlgrp1_tarewgt', 'trl_axlgrp1_grosswgt', 'trl_axlgrp2_tarewgt', 'trl_axlgrp2_grosswgt', 'trl_exp1_enddate', 'trl_exp2_enddate', 'trl_gps_desc', 'trl_gps_date', 'trl_gps_latitude', 'trl_gps_longitude', 'trl_gps_odometer', 'trl_lifetimemileage', 'trl_branch', 'trl_liccountry', 'trl_aceid', 'trl_aceidtype', 'trl_height', 'trl_width', 'trl_email', 'trl_equipmenttype', 'trl_prefix', 'trl_prior_cmp_othertype1', 'trl_next_cmp_othertype1', 'trl_capacity_wgt', 'trl_capacity_ldm', 'rowsec_rsrv_id', 'trl_dwelltime', 'bison_last_carrier', 'bison_last_mov', 'trl_useGeofencing', 'trl_gps_heading', 'trl_gps_speed', 'trl_validitychks', 'trl_cmpt1_temp', 'trl_cmpt2_temp', 'trl_cmpt3_temp', 'trl_cmpt4_temp', 'trl_cmpt5_temp', 'trl_cmpt1_setpoint', 'trl_cmpt2_setpoint', 'trl_cmpt3_setpoint', 'trl_cmpt4_setpoint', 'trl_cmpt5_setpoint', 'trl_dischargetemp', 'trl_ambienttemp', 'trl_alarmstate', 'trl_cmpt1_desired_setpoint', 'trl_cmpt2_desired_setpoint', 'trl_cmpt3_desired_setpoint', 'trl_cmpt4_desired_setpoint', 'trl_cmpt5_desired_setpoint', 'trl_desired_setpoints_setby', 'trl_reeferpower', 'trl_mcommID', 'trl_mcommType', 'trl_reeferhist1', 'trl_reeferhist2', 'trl_ams_type', 'trl_unassigned_reasoncode', 'trl_unassigned_comments', 'trl_iso_code', 'PayScheduleId', 'trl_mobilecommaccount', 'trl_app_eqcodes', 'OriginDestinationOption', 'trl_use_rfid', 'trl_rfid_tag', 'trl_carrier', 'trl_double_bulk_head', 'trl_pump_unit', 'iso_code', 'trl_discharge_side', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
