<?php

namespace App\Models\psbison;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $trc_number
 * @property string $trc_owner
 * @property string $trc_make
 * @property string $trc_model
 * @property int $trc_currenthub
 * @property string $trc_type1
 * @property string $trc_type2
 * @property string $trc_type3
 * @property string $trc_type4
 * @property int $trc_year
 * @property string $trc_startdate
 * @property string $trc_retiredate
 * @property float $trc_mpg
 * @property string $trc_company
 * @property string $trc_division
 * @property string $trc_fleet
 * @property string $trc_terminal
 * @property string $trc_dateacquired
 * @property int $trc_origmileage
 * @property int $trc_enginehrs
 * @property string $trc_enginemake
 * @property string $trc_enginemodel
 * @property string $trc_engineserial
 * @property string $trc_serial
 * @property string $trc_licstate
 * @property string $trc_licnum
 * @property float $trc_origcost
 * @property float $trc_opercostpermi
 * @property int $trc_grosswgt
 * @property int $trc_axles
 * @property int $trc_warrantydays
 * @property string $trc_commethod
 * @property string $trc_status
 * @property string $trc_avl_date
 * @property string $trc_avl_cmp_id
 * @property int $trc_avl_city
 * @property string $trc_avl_status
 * @property string $trc_pln_date
 * @property string $trc_pln_cmp_id
 * @property int $trc_pln_city
 * @property int $trc_pln_lgh
 * @property int $trc_avl_lgh
 * @property int $trc_cur_mileage
 * @property string $trc_driver
 * @property mixed $timestamp
 * @property string $trc_actg_type
 * @property string $trc_driver2
 * @property string $trc_misc1
 * @property string $trc_misc2
 * @property string $trc_misc3
 * @property string $trc_misc4
 * @property string $trc_updatedby
 * @property string $trc_turndown
 * @property string $trc_phone
 * @property string $trc_nextdestpref
 * @property string $trc_mtcalltime
 * @property string $trc_updatedon
 * @property float $trc_tareweight
 * @property string $trc_tareweight_uom
 * @property float $trc_bmpr_to_steer
 * @property string $trc_bmpr_to_steer_uom
 * @property float $trc_steer_to_drive1
 * @property string $trc_steer_to_drive1_uom
 * @property float $trc_drive1_to_drive2
 * @property string $trc_drive1_to_drive2_uom
 * @property float $trc_drive2_to_rear
 * @property string $trc_drive2_to_rear_uom
 * @property string $trc_createdate
 * @property int $trc_whltobase
 * @property int $trc_cabtoaxle
 * @property int $trc_bprtobkcab
 * @property int $trc_frontaxlspc
 * @property int $trc_rearaxlspc
 * @property int $trc_fifthwhltvl
 * @property int $trc_dummy
 * @property int $trc_ttltarewt
 * @property string $trc_whltobase_uom
 * @property string $trc_cabtoaxle_uom
 * @property string $trc_bprtobkcab_uom
 * @property string $trc_frontaxlspc_uom
 * @property string $trc_rearaxlspc_uom
 * @property string $trc_fifthwhltvl_uom
 * @property string $trc_ttltarewt_uom
 * @property int $trc_fifthwheelht
 * @property string $trc_fifthwheelht_uom
 * @property string $trc_quickentry
 * @property string $trc_thirdparty
 * @property int $trc_gal_in_tank
 * @property int $trc_tank_capacity
 * @property string $trc_trailer1
 * @property string $trc_trailer2
 * @property string $trc_gps_desc
 * @property string $trc_gps_date
 * @property int $trc_gps_latitude
 * @property int $trc_gps_longitude
 * @property string $trc_networks
 * @property string $bis_nyhut
 * @property string $bis_nyhutexp
 * @property string $bis_oregon
 * @property string $bis_oregonexp
 * @property string $bis_newmex
 * @property string $bis_newmexexp
 * @property string $bis_customs
 * @property string $bis_customsexp
 * @property string $bis_ifta
 * @property string $bis_iftaexp
 * @property int $bis_hvut
 * @property int $bis_pmsched
 * @property int $bis_kyu
 * @property string $bis_idahohm
 * @property string $bis_idahohmexp
 * @property string $trc_exp1_date
 * @property string $trc_exp2_date
 * @property int $trc_nextmainthub
 * @property int $bis_nextodom
 * @property int $bis_lasttripdvir
 * @property string $bis_lasttripdvirdate
 * @property string $trc_comment
 * @property int $bis_milessincepm
 * @property string $bis_lastmilescalc
 * @property string $bis_lastwo
 * @property string $bis_lastwodate
 * @property int $bis_lastwomiles
 * @property string $bis_nyhutold
 * @property string $trc_checkconflict
 * @property string $trc_note_date
 * @property string $trc_alert_date
 * @property string $trc_prior_event
 * @property string $trc_prior_cmp_id
 * @property int $trc_prior_city
 * @property string $trc_prior_state
 * @property string $trc_prior_region1
 * @property string $trc_prior_region2
 * @property string $trc_prior_region3
 * @property string $trc_prior_region4
 * @property string $trc_next_event
 * @property string $trc_next_cmp_id
 * @property int $trc_next_city
 * @property string $trc_next_state
 * @property string $trc_next_region1
 * @property string $trc_next_region2
 * @property string $trc_next_region3
 * @property string $trc_next_region4
 * @property int $trc_gps_odometer
 * @property string $trc_require_drvtrl
 * @property string $trc_eta_skip
 * @property string $trc_accessorylist
 * @property int $trc_newused
 * @property string $trc_gp_class
 * @property string $bis_reefstart
 * @property string $trc_loading_class
 * @property float $trc_axlgrp1_tarewgt
 * @property float $trc_axlgrp1_grosswgt
 * @property float $trc_axlgrp2_tarewgt
 * @property float $trc_axlgrp2_grosswgt
 * @property string $trc_exp1_enddate
 * @property string $trc_exp2_enddate
 * @property string $bis_FASTtransponder
 * @property string $bis_FASTplacard
 * @property float $bis_sftyend
 * @property int $bis_sdrp_active
 * @property int $bis_sdrp_ready
 * @property string $trc_m2_subconfig
 * @property float $trc_lifetimemileage
 * @property string $trc_branch
 * @property string $trc_usegeofencing
 * @property string $trc_mctid
 * @property string $trc_carrier
 * @property string $trc_aceid
 * @property string $trc_transponder
 * @property string $trc_dotnumber
 * @property string $trc_insurance_co
 * @property string $trc_insurance_policy
 * @property string $trc_insurance_year
 * @property int $trc_insurance_amt
 * @property string $trc_aceidtype
 * @property string $trc_liccountry
 * @property string $bis_IRP
 * @property string $bis_IRPexp
 * @property string $trc_email
 * @property string $trc_lastpos_datetime
 * @property float $trc_lastpos_lat
 * @property float $trc_lastpos_long
 * @property string $trc_lastpos_nearctynme
 * @property string $trc_lastpos_nearctyste
 * @property string $trc_mobcommtype
 * @property string $trc_comment1
 * @property string $trc_cyclic_dsp_enabled
 * @property string $trc_preassign_ack_required
 * @property float $trc_suggested_paypercent
 * @property string $trc_prior_cmp_othertype1
 * @property string $trc_next_cmp_othertype1
 * @property string $bison_lastcleaned
 * @property int $bison_flags
 * @property string $bison_keys
 * @property string $bison_clean
 * @property string $trc_dailyflag
 * @property string $trc_dailyflagdate
 * @property int $trc_distancecost_rate
 * @property int $trc_costperhour
 * @property int $rowsec_rsrv_id
 * @property int $trc_milestonext
 * @property int $trc_next_stopnumber
 * @property int $trc_next_legnumber
 * @property string $trc_next_stoparrival
 * @property string $trc_last_calcdate
 * @property string $trc_altid
 * @property string $bis_leaseend
 * @property int $bis_leasemiles
 * @property int $bis_lastodom
 * @property string $trc_timezone
 * @property float $trc_gps_heading
 * @property int $trc_gps_speed
 * @property float $trc_advpercent
 * @property string $trc_optimization_modeling_flag
 * @property string $trc_fueltype
 * @property string $trc_mcommtrlid
 * @property string $trc_mcommID
 * @property string $trc_mcommType
 * @property int $trc_DEFCapacity
 * @property int $trc_DEFLevel
 * @property string $trc_ams_type
 * @property string $trc_owner2
 * @property float $trc_ownerpct
 * @property string $trc_optimization_staging_customer
 * @property string $trc_reload_status
 * @property string $trc_grandfather_date
 * @property string $trc_pta_date
 * @property string $trc_optimizationdate
 * @property string $trc_teamleader
 * @property int $PayScheduleId
 * @property string $trc_app_eqcodes
 * @property string $trc_geo_process_oo
 * @property string $trc_geo_send_oo
 * @property string $trc_geo_process
 * @property string $trc_geo_send
 * @property string $bison_tractornote
 * @property string $OriginDestinationOption
 * @property string $trc_use_rfid
 * @property string $trc_rfid_tag
 * @property string $bis_wgtclass
 * @property string $INS_TIMESTAMP
 */
class TractorProfile extends Model
{
    use HasFactory;

    const CREATED_AT = 'INS_TIMESTAMP';

    const UPDATED_AT = null;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TractorProfile';

    protected $fillable = ['trc_number', 'trc_owner', 'trc_make', 'trc_model', 'trc_currenthub', 'trc_type1', 'trc_type2', 'trc_type3', 'trc_type4', 'trc_year', 'trc_startdate', 'trc_retiredate', 'trc_mpg', 'trc_company', 'trc_division', 'trc_fleet', 'trc_terminal', 'trc_dateacquired', 'trc_origmileage', 'trc_enginehrs', 'trc_enginemake', 'trc_enginemodel', 'trc_engineserial', 'trc_serial', 'trc_licstate', 'trc_licnum', 'trc_origcost', 'trc_opercostpermi', 'trc_grosswgt', 'trc_axles', 'trc_warrantydays', 'trc_commethod', 'trc_status', 'trc_avl_date', 'trc_avl_cmp_id', 'trc_avl_city', 'trc_avl_status', 'trc_pln_date', 'trc_pln_cmp_id', 'trc_pln_city', 'trc_pln_lgh', 'trc_avl_lgh', 'trc_cur_mileage', 'trc_driver', 'timestamp', 'trc_actg_type', 'trc_driver2', 'trc_misc1', 'trc_misc2', 'trc_misc3', 'trc_misc4', 'trc_updatedby', 'trc_turndown', 'trc_phone', 'trc_nextdestpref', 'trc_mtcalltime', 'trc_updatedon', 'trc_tareweight', 'trc_tareweight_uom', 'trc_bmpr_to_steer', 'trc_bmpr_to_steer_uom', 'trc_steer_to_drive1', 'trc_steer_to_drive1_uom', 'trc_drive1_to_drive2', 'trc_drive1_to_drive2_uom', 'trc_drive2_to_rear', 'trc_drive2_to_rear_uom', 'trc_createdate', 'trc_whltobase', 'trc_cabtoaxle', 'trc_bprtobkcab', 'trc_frontaxlspc', 'trc_rearaxlspc', 'trc_fifthwhltvl', 'trc_dummy', 'trc_ttltarewt', 'trc_whltobase_uom', 'trc_cabtoaxle_uom', 'trc_bprtobkcab_uom', 'trc_frontaxlspc_uom', 'trc_rearaxlspc_uom', 'trc_fifthwhltvl_uom', 'trc_ttltarewt_uom', 'trc_fifthwheelht', 'trc_fifthwheelht_uom', 'trc_quickentry', 'trc_thirdparty', 'trc_gal_in_tank', 'trc_tank_capacity', 'trc_trailer1', 'trc_trailer2', 'trc_gps_desc', 'trc_gps_date', 'trc_gps_latitude', 'trc_gps_longitude', 'trc_networks', 'bis_nyhut', 'bis_nyhutexp', 'bis_oregon', 'bis_oregonexp', 'bis_newmex', 'bis_newmexexp', 'bis_customs', 'bis_customsexp', 'bis_ifta', 'bis_iftaexp', 'bis_hvut', 'bis_pmsched', 'bis_kyu', 'bis_idahohm', 'bis_idahohmexp', 'trc_exp1_date', 'trc_exp2_date', 'trc_nextmainthub', 'bis_nextodom', 'bis_lasttripdvir', 'bis_lasttripdvirdate', 'trc_comment', 'bis_milessincepm', 'bis_lastmilescalc', 'bis_lastwo', 'bis_lastwodate', 'bis_lastwomiles', 'bis_nyhutold', 'trc_checkconflict', 'trc_note_date', 'trc_alert_date', 'trc_prior_event', 'trc_prior_cmp_id', 'trc_prior_city', 'trc_prior_state', 'trc_prior_region1', 'trc_prior_region2', 'trc_prior_region3', 'trc_prior_region4', 'trc_next_event', 'trc_next_cmp_id', 'trc_next_city', 'trc_next_state', 'trc_next_region1', 'trc_next_region2', 'trc_next_region3', 'trc_next_region4', 'trc_gps_odometer', 'trc_require_drvtrl', 'trc_eta_skip', 'trc_accessorylist', 'trc_newused', 'trc_gp_class', 'bis_reefstart', 'trc_loading_class', 'trc_axlgrp1_tarewgt', 'trc_axlgrp1_grosswgt', 'trc_axlgrp2_tarewgt', 'trc_axlgrp2_grosswgt', 'trc_exp1_enddate', 'trc_exp2_enddate', 'bis_FASTtransponder', 'bis_FASTplacard', 'bis_sftyend', 'bis_sdrp_active', 'bis_sdrp_ready', 'trc_m2_subconfig', 'trc_lifetimemileage', 'trc_branch', 'trc_usegeofencing', 'trc_mctid', 'trc_carrier', 'trc_aceid', 'trc_transponder', 'trc_dotnumber', 'trc_insurance_co', 'trc_insurance_policy', 'trc_insurance_year', 'trc_insurance_amt', 'trc_aceidtype', 'trc_liccountry', 'bis_IRP', 'bis_IRPexp', 'trc_email', 'trc_lastpos_datetime', 'trc_lastpos_lat', 'trc_lastpos_long', 'trc_lastpos_nearctynme', 'trc_lastpos_nearctyste', 'trc_mobcommtype', 'trc_comment1', 'trc_cyclic_dsp_enabled', 'trc_preassign_ack_required', 'trc_suggested_paypercent', 'trc_prior_cmp_othertype1', 'trc_next_cmp_othertype1', 'bison_lastcleaned', 'bison_flags', 'bison_keys', 'bison_clean', 'trc_dailyflag', 'trc_dailyflagdate', 'trc_distancecost_rate', 'trc_costperhour', 'rowsec_rsrv_id', 'trc_milestonext', 'trc_next_stopnumber', 'trc_next_legnumber', 'trc_next_stoparrival', 'trc_last_calcdate', 'trc_altid', 'bis_leaseend', 'bis_leasemiles', 'bis_lastodom', 'trc_timezone', 'trc_gps_heading', 'trc_gps_speed', 'trc_advpercent', 'trc_optimization_modeling_flag', 'trc_fueltype', 'trc_mcommtrlid', 'trc_mcommID', 'trc_mcommType', 'trc_DEFCapacity', 'trc_DEFLevel', 'trc_ams_type', 'trc_owner2', 'trc_ownerpct', 'trc_optimization_staging_customer', 'trc_reload_status', 'trc_grandfather_date', 'trc_pta_date', 'trc_optimizationdate', 'trc_teamleader', 'PayScheduleId', 'trc_app_eqcodes', 'trc_geo_process_oo', 'trc_geo_send_oo', 'trc_geo_process', 'trc_geo_send', 'bison_tractornote', 'OriginDestinationOption', 'trc_use_rfid', 'trc_rfid_tag', 'bis_wgtclass', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';

}
