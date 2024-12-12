<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $car_id
 * @property string $car_name
 * @property string $car_fedid
 * @property string $car_address1
 * @property string $car_address2
 * @property int $cty_code
 * @property string $car_zip
 * @property string $pto_id
 * @property string $car_scac
 * @property string $car_contact
 * @property string $car_type1
 * @property string $car_type2
 * @property string $car_type3
 * @property string $car_type4
 * @property string $car_misc1
 * @property string $car_misc2
 * @property string $car_misc3
 * @property string $car_misc4
 * @property string $car_phone1
 * @property string $car_phone2
 * @property string $car_phone3
 * @property string $car_lastactivity
 * @property string $car_actg_type
 * @property string $car_iccnum
 * @property string $car_contract
 * @property string $car_otherid
 * @property string $car_usecashcard
 * @property string $car_status
 * @property string $car_board
 * @property string $car_updatedby
 * @property string $car_updateddate
 * @property string $car_createdate
 * @property string $car_exp1_date
 * @property string $car_exp2_date
 * @property string $car_terminationdt
 * @property string $car_email
 * @property string $car_service_location
 * @property string $car_currency
 * @property string $car_country
 * @property string $car_gp_class
 * @property string $car_agent
 * @property int $YTDcount
 * @property int $YTDlates
 * @property int $prevYearCount
 * @property int $prevYearLates
 * @property string $car_trltype1
 * @property string $car_trltype2
 * @property string $car_trltype3
 * @property string $car_trltype4
 * @property int $car_ins_cargolimits
 * @property int $car_ins_liabilitylimits
 * @property string $car_ins_certificate
 * @property string $car_ins_w9
 * @property string $car_ins_contract
 * @property string $car_exp1_enddate
 * @property string $car_exp2_enddate
 * @property string $car_rating
 * @property string $car_branch
 * @property string $car_dotnum
 * @property int $car_204flag
 * @property int $car_210flag
 * @property int $car_214flag
 * @property string $car_quickentry
 * @property int $car_loads_offered
 * @property int $car_loads_responded_to
 * @property int $car_loads_not_responded_to
 * @property int $car_loads_awarded
 * @property int $car_loads_on_time
 * @property int $car_confirmprint
 * @property int $car_confirmfax
 * @property int $car_confirmemail
 * @property string $car_confirmpathname
 * @property string $car_411_monitored
 * @property int $car_confirm_ir_id
 * @property int $car_confirm_irk_id
 * @property string $car_confirm_type
 * @property string $car_204tender
 * @property string $car_204update
 * @property string $car_extequip_interval_warnlevel
 * @property int $car_extequip_interval_hours
 * @property int $car_extequip_interval_maxcount
 * @property string $car_fgt_pay_terms
 * @property int $car_hazmat
 * @property string $car_approval_dt
 * @property string $car_sub_iccnum
 * @property int $car_eft_flag
 * @property string $car_web_address
 * @property string $car_region_type
 * @property string $car_manager
 * @property string $car_tier_rating
 * @property string $car_tenderloadby
 * @property int $car_204validate
 * @property int $rowsec_rsrv_id
 * @property string $car_CRMType
 * @property mixed $dw_timestamp
 * @property string $car_mt_type_loaded
 * @property string $car_mt_type_empty
 * @property int $car_204_cancel_new
 * @property string $car_fuel_card_account_id
 * @property string $car_fuel_card_pay_type
 * @property string $car_report_url
 * @property int $PayScheduleId
 * @property string $car_dispatch_compute_on_save
 * @property string $car_CarrierWatch_monitored
 * @property string $OriginDestinationOption
 * @property string $external_type
 * @property int $car_score
 * @property string $car_preventrating
 * @property string $car_req_cin
 * @property string $car_fuel_card_carrier_id
 * @property string $car_RateBy
 * @property float $car_ctw_conv
 * @property float $car_ctw_break
 * @property float $car_wtc_conv
 * @property string $car_ctw_weightunits
 * @property string $car_ctw_volumeunits
 * @property string $car_relationship
 * @property string $INS_TIMESTAMP
 */
class Carrier extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Carrier';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'car_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    protected $fillable = ['car_name', 'car_fedid', 'car_address1', 'car_address2', 'cty_code', 'car_zip', 'pto_id', 'car_scac', 'car_contact', 'car_type1', 'car_type2', 'car_type3', 'car_type4', 'car_misc1', 'car_misc2', 'car_misc3', 'car_misc4', 'car_phone1', 'car_phone2', 'car_phone3', 'car_lastactivity', 'car_actg_type', 'car_iccnum', 'car_contract', 'car_otherid', 'car_usecashcard', 'car_status', 'car_board', 'car_updatedby', 'car_updateddate', 'car_createdate', 'car_exp1_date', 'car_exp2_date', 'car_terminationdt', 'car_email', 'car_service_location', 'car_currency', 'car_country', 'car_gp_class', 'car_agent', 'YTDcount', 'YTDlates', 'prevYearCount', 'prevYearLates', 'car_trltype1', 'car_trltype2', 'car_trltype3', 'car_trltype4', 'car_ins_cargolimits', 'car_ins_liabilitylimits', 'car_ins_certificate', 'car_ins_w9', 'car_ins_contract', 'car_exp1_enddate', 'car_exp2_enddate', 'car_rating', 'car_branch', 'car_dotnum', 'car_204flag', 'car_210flag', 'car_214flag', 'car_quickentry', 'car_loads_offered', 'car_loads_responded_to', 'car_loads_not_responded_to', 'car_loads_awarded', 'car_loads_on_time', 'car_confirmprint', 'car_confirmfax', 'car_confirmemail', 'car_confirmpathname', 'car_411_monitored', 'car_confirm_ir_id', 'car_confirm_irk_id', 'car_confirm_type', 'car_204tender', 'car_204update', 'car_extequip_interval_warnlevel', 'car_extequip_interval_hours', 'car_extequip_interval_maxcount', 'car_fgt_pay_terms', 'car_hazmat', 'car_approval_dt', 'car_sub_iccnum', 'car_eft_flag', 'car_web_address', 'car_region_type', 'car_manager', 'car_tier_rating', 'car_tenderloadby', 'car_204validate', 'rowsec_rsrv_id', 'car_CRMType', 'dw_timestamp', 'car_mt_type_loaded', 'car_mt_type_empty', 'car_204_cancel_new', 'car_fuel_card_account_id', 'car_fuel_card_pay_type', 'car_report_url', 'PayScheduleId', 'car_dispatch_compute_on_save', 'car_CarrierWatch_monitored', 'OriginDestinationOption', 'external_type', 'car_score', 'car_preventrating', 'car_req_cin', 'car_fuel_card_carrier_id', 'car_RateBy', 'car_ctw_conv', 'car_ctw_break', 'car_wtc_conv', 'car_ctw_weightunits', 'car_ctw_volumeunits', 'car_relationship', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
