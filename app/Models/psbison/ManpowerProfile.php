<?php

namespace App\Models\psbison;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $mpp_id
 * @property string $mpp_type
 * @property string $mpp_tractornumber
 * @property string $mpp_otherid
 * @property string $mpp_employedby
 * @property string $mpp_firstname
 * @property string $mpp_middlename
 * @property string $mpp_lastname
 * @property string $mpp_ssn
 * @property string $mpp_address1
 * @property string $mpp_address2
 * @property int $mpp_city
 * @property string $mpp_state
 * @property string $mpp_zip
 * @property string $mpp_hiredate
 * @property string $mpp_senioritydate
 * @property string $mpp_licensestate
 * @property string $mpp_licenseclass
 * @property string $mpp_licensenumber
 * @property string $mpp_dateofbirth
 * @property string $mpp_currentphone
 * @property string $mpp_alternatephone
 * @property string $mpp_homephone
 * @property string $mpp_type1
 * @property string $mpp_type2
 * @property string $mpp_type3
 * @property string $mpp_type4
 * @property string $mpp_currency
 * @property string $mpp_payto
 * @property int $mpp_singlemilerate
 * @property int $mpp_teammilerate
 * @property float $mpp_hourlyrate
 * @property int $mpp_revenuerate
 * @property string $mpp_teamleader
 * @property string $mpp_fleet
 * @property string $mpp_division
 * @property string $mpp_domicile
 * @property string $mpp_company
 * @property string $mpp_terminal
 * @property string $mpp_status
 * @property string $mpp_emerphone
 * @property string $mpp_emername
 * @property string $mpp_voicemailbox
 * @property string $mpp_terminationdt
 * @property string $mpp_avl_date
 * @property string $mpp_avl_cmp_id
 * @property int $mpp_avl_city
 * @property string $mpp_avl_status
 * @property string $mpp_pln_date
 * @property string $mpp_pln_cmp_id
 * @property int $mpp_pln_city
 * @property int $mpp_pln_lgh
 * @property int $mpp_avl_lgh
 * @property string $mpp_lastfirst
 * @property mixed $timestamp
 * @property string $mpp_actg_type
 * @property string $mpp_last_home
 * @property string $mpp_want_home
 * @property string $mpp_misc1
 * @property string $mpp_misc2
 * @property string $mpp_misc3
 * @property string $mpp_misc4
 * @property string $mpp_usecashcard
 * @property string $mpp_updatedby
 * @property string $mpp_bmp_pathname
 * @property string $mpp_updateon
 * @property string $mpp_createdate
 * @property string $mpp_quickentry
 * @property string $mpp_servicerule
 * @property string $mpp_gps_desc
 * @property string $mpp_gps_date
 * @property int $mpp_gps_latitude
 * @property int $mpp_gps_longitude
 * @property int $mpp_travel_minutes
 * @property int $mpp_mile_day7
 * @property int $mpp_home_latitude
 * @property int $mpp_home_longitude
 * @property string $mpp_last_log_date
 * @property float $mpp_hours1
 * @property float $mpp_hours2
 * @property float $mpp_hours3
 * @property string $mpp_home_city
 * @property float $mpp_hours4
 * @property string $mpp_exp1_date
 * @property string $mpp_exp2_date
 * @property float $bis_sftystart
 * @property float $bis_sftyend
 * @property float $bis_sftyaward
 * @property float $bis_maxever
 * @property float $bis_sftylstaward
 * @property float $bis_sftylststart
 * @property float $bis_sftylstend
 * @property string $mpp_next_event
 * @property string $mpp_next_cmp_id
 * @property int $mpp_next_city
 * @property string $mpp_next_state
 * @property string $mpp_next_region1
 * @property string $mpp_next_region2
 * @property string $mpp_next_region3
 * @property string $mpp_next_region4
 * @property string $mpp_prior_event
 * @property string $mpp_prior_cmp_id
 * @property int $mpp_prior_city
 * @property string $mpp_prior_state
 * @property string $mpp_prior_region1
 * @property string $mpp_prior_region2
 * @property string $mpp_prior_region3
 * @property string $mpp_prior_region4
 * @property float $mpp_dailyhrsest
 * @property float $mpp_weeklyhrsest
 * @property string $mpp_lastlog_cmp_id
 * @property string $mpp_lastlog_estdate
 * @property string $mpp_lastlog_cmp_name
 * @property string $mpp_estlog_datetime
 * @property string $bis_mailbox
 * @property int $mpp_gps_odometer
 * @property string $bis_mailboxkey
 * @property string $bis_nmstct
 * @property int $bis_sglrate
 * @property int $bis_dblrate
 * @property string $bis_club
 * @property string $bis_password
 * @property float $bis_h8_day1
 * @property float $bis_h8_day2
 * @property float $bis_h8_day3
 * @property float $bis_h14_day1
 * @property float $bis_h14_day2
 * @property float $bis_h14_day3
 * @property string $bis_todaystart
 * @property int $bis_noyestlog
 * @property int $bis_milestoday
 * @property string $mpp_password
 * @property int $mpp_ArvDep_Allowance_mins
 * @property float $mpp_hours1_week
 * @property string $mpp_qualificationlist
 * @property string $mpp_country
 * @property string $mpp_gp_class
 * @property int $bis_minority
 * @property int $bis_aboriginal
 * @property int $bis_disability
 * @property string $bis_gender
 * @property string $bis_knownas
 * @property int $mpp_nbrdependents
 * @property int $mpp_avghourlypay
 * @property int $mpp_avgperiodpay
 * @property int $mpp_dailyguarenteedhours
 * @property int $mpp_periodguarenteedhours
 * @property string $mpp_comparisonflag
 * @property string $mpp_exp1_enddate
 * @property string $mpp_exp2_enddate
 * @property float $bis_vacpay
 * @property string $bis_tcgterminal
 * @property int $bis_sdrp_active
 * @property int $bis_sdrp_ready
 * @property string $mpp_bid_next_starttime
 * @property float $mpp_bid_next_hours
 * @property string $mpp_bid_next_type
 * @property string $mpp_bid_next_routestore
 * @property string $mpp_90daystart
 * @property string $mpp_branch
 * @property int $rec_id
 * @property string $mpp_perdiem_flag
 * @property string $mpp_perdiem_eff_date
 * @property string $mpp_athome_terminal
 * @property int $mpp_cmpissuedpoints
 * @property string $mpp_drivedate
 * @property int $mpp_yearsofsafedrive
 * @property string $mpp_ysdasofdate
 * @property string $mpp_mt_type_loaded
 * @property string $mpp_mt_type_empty
 * @property string $mpp_gender
 * @property string $mpp_aceid
 * @property string $mpp_aceidtype
 * @property string $mpp_proximitycardid
 * @property string $mpp_citizenship_status
 * @property string $mpp_citizenship_country
 * @property string $mpp_pta_date
 * @property string $bis_legalname
 * @property string $mpp_email
 * @property string $bis_float
 * @property string $bis_schedule
 * @property string $mpp_shiftnumber
 * @property string $mpp_eff_date
 * @property float $mpp_tuitioncost
 * @property float $mpp_forgive_amt
 * @property float $mpp_forgive_week_crd_amt
 * @property int $mpp_forgive_period
 * @property float $mpp_contribution_amt
 * @property int $mpp_cont_period
 * @property float $mpp_cont_week_amt
 * @property int $mpp_forgive_crd_nbr
 * @property int $mpp_cont_ded_nbr
 * @property string $mpp_eligible_start_date
 * @property string $mpp_tuition_acct_status
 * @property string $mpp_train_anv_bonus_pd
 * @property float $mpp_forgive_remain_balance
 * @property float $mpp_cont_remain_balance
 * @property string $mpp_train_anv_bonus_elig_date
 * @property float $mpp_train_anv_bonus_amt
 * @property int $mpp_updt_forgive_crd_nbr
 * @property int $mpp_updt_cont_ded_nbr
 * @property float $mpp_updt_forgive_remain_balance
 * @property float $mpp_updt_cont_remain_balance
 * @property string $mpp_comment1
 * @property string $mpp_cyclic_dsp_enabled
 * @property string $mpp_preassign_ack_required
 * @property string $mpp_shift_start
 * @property string $mpp_shift_end
 * @property string $mpp_prior_cmp_othertype1
 * @property string $mpp_next_cmp_othertype1
 * @property int $mpp_hrs_dbl_time
 * @property string $mpp_override_default_ot
 * @property int $mpp_csa_score
 * @property string $mpp_driverlogtype
 * @property string $mpp_driverlogGroups
 * @property string $mpp_driverlogTerminal
 * @property int $mpp_advance_rate_solo
 * @property int $mpp_advance_rate_team
 * @property int $rowsec_rsrv_id
 * @property int $sth_id
 * @property string $sth_startdate
 * @property string $mpp_default_shiftstart
 * @property string $mpp_default_shiftend
 * @property int $mpp_milestonext
 * @property int $mpp_next_stopnumber
 * @property int $mpp_next_legnumber
 * @property string $mpp_next_stoparrival
 * @property string $mpp_last_calcdate
 * @property string $mpp_lastmobilecomm
 * @property string $mpp_default_shiftpriority
 * @property string $mpp_employeetype
 * @property float $mpp_timeoffbetweenduty
 * @property string $bis_shirtsize
 * @property float $mpp_gps_heading
 * @property int $mpp_gps_speed
 * @property string $mpp_mcommID
 * @property string $mpp_mcommType
 * @property int $mpp_hosstatus
 * @property string $mpp_hosstatusdate
 * @property string $mpp_hosactivityupdateon
 * @property string $mpp_last_DailyLogsDate
 * @property string $mpp_last_DailyLogsConfirmedDate
 * @property string $mpp_hos_poll_required
 * @property float $mpp_fourteenhrest
 * @property string $mpp_subsistence_eligible
 * @property string $mpp_subsistence_home_cmp_id
 * @property float $mpp_subsistence_pay_radius
 * @property string $mpp_subsistence_use_at_home
 * @property string $mpp_subsistence_cmp_id
 * @property string $mpp_grandfather_date
 * @property string $mpp_trainee
 * @property string $mpp_trainer
 * @property int $PayScheduleId
 * @property int $bis_participantID
 * @property string $mpp_rtw_date
 * @property int $guaranteed_pay_promised
 * @property string $CompensationType
 * @property string $bis_tractorOwner1
 * @property string $bis_tractorOwner2
 * @property string $OriginDestinationOption
 * @property string $mpp_carrier
 * @property string $mpp_note
 * @property string $mpp_note_updatedate
 * @property string $mpp_alternate_servicerule
 * @property string $INS_TIMESTAMP
 */
class ManpowerProfile extends Model
{
    use HasFactory;

    const CREATED_AT = 'INS_TIMESTAMP';

    const UPDATED_AT = null;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ManpowerProfile';

    protected $fillable = ['mpp_id', 'mpp_type', 'mpp_tractornumber', 'mpp_otherid', 'mpp_employedby', 'mpp_firstname', 'mpp_middlename', 'mpp_lastname', 'mpp_ssn', 'mpp_address1', 'mpp_address2', 'mpp_city', 'mpp_state', 'mpp_zip', 'mpp_hiredate', 'mpp_senioritydate', 'mpp_licensestate', 'mpp_licenseclass', 'mpp_licensenumber', 'mpp_dateofbirth', 'mpp_currentphone', 'mpp_alternatephone', 'mpp_homephone', 'mpp_type1', 'mpp_type2', 'mpp_type3', 'mpp_type4', 'mpp_currency', 'mpp_payto', 'mpp_singlemilerate', 'mpp_teammilerate', 'mpp_hourlyrate', 'mpp_revenuerate', 'mpp_teamleader', 'mpp_fleet', 'mpp_division', 'mpp_domicile', 'mpp_company', 'mpp_terminal', 'mpp_status', 'mpp_emerphone', 'mpp_emername', 'mpp_voicemailbox', 'mpp_terminationdt', 'mpp_avl_date', 'mpp_avl_cmp_id', 'mpp_avl_city', 'mpp_avl_status', 'mpp_pln_date', 'mpp_pln_cmp_id', 'mpp_pln_city', 'mpp_pln_lgh', 'mpp_avl_lgh', 'mpp_lastfirst', 'timestamp', 'mpp_actg_type', 'mpp_last_home', 'mpp_want_home', 'mpp_misc1', 'mpp_misc2', 'mpp_misc3', 'mpp_misc4', 'mpp_usecashcard', 'mpp_updatedby', 'mpp_bmp_pathname', 'mpp_updateon', 'mpp_createdate', 'mpp_quickentry', 'mpp_servicerule', 'mpp_gps_desc', 'mpp_gps_date', 'mpp_gps_latitude', 'mpp_gps_longitude', 'mpp_travel_minutes', 'mpp_mile_day7', 'mpp_home_latitude', 'mpp_home_longitude', 'mpp_last_log_date', 'mpp_hours1', 'mpp_hours2', 'mpp_hours3', 'mpp_home_city', 'mpp_hours4', 'mpp_exp1_date', 'mpp_exp2_date', 'bis_sftystart', 'bis_sftyend', 'bis_sftyaward', 'bis_maxever', 'bis_sftylstaward', 'bis_sftylststart', 'bis_sftylstend', 'mpp_next_event', 'mpp_next_cmp_id', 'mpp_next_city', 'mpp_next_state', 'mpp_next_region1', 'mpp_next_region2', 'mpp_next_region3', 'mpp_next_region4', 'mpp_prior_event', 'mpp_prior_cmp_id', 'mpp_prior_city', 'mpp_prior_state', 'mpp_prior_region1', 'mpp_prior_region2', 'mpp_prior_region3', 'mpp_prior_region4', 'mpp_dailyhrsest', 'mpp_weeklyhrsest', 'mpp_lastlog_cmp_id', 'mpp_lastlog_estdate', 'mpp_lastlog_cmp_name', 'mpp_estlog_datetime', 'bis_mailbox', 'mpp_gps_odometer', 'bis_mailboxkey', 'bis_nmstct', 'bis_sglrate', 'bis_dblrate', 'bis_club', 'bis_password', 'bis_h8_day1', 'bis_h8_day2', 'bis_h8_day3', 'bis_h14_day1', 'bis_h14_day2', 'bis_h14_day3', 'bis_todaystart', 'bis_noyestlog', 'bis_milestoday', 'mpp_password', 'mpp_ArvDep_Allowance_mins', 'mpp_hours1_week', 'mpp_qualificationlist', 'mpp_country', 'mpp_gp_class', 'bis_minority', 'bis_aboriginal', 'bis_disability', 'bis_gender', 'bis_knownas', 'mpp_nbrdependents', 'mpp_avghourlypay', 'mpp_avgperiodpay', 'mpp_dailyguarenteedhours', 'mpp_periodguarenteedhours', 'mpp_comparisonflag', 'mpp_exp1_enddate', 'mpp_exp2_enddate', 'bis_vacpay', 'bis_tcgterminal', 'bis_sdrp_active', 'bis_sdrp_ready', 'mpp_bid_next_starttime', 'mpp_bid_next_hours', 'mpp_bid_next_type', 'mpp_bid_next_routestore', 'mpp_90daystart', 'mpp_branch', 'rec_id', 'mpp_perdiem_flag', 'mpp_perdiem_eff_date', 'mpp_athome_terminal', 'mpp_cmpissuedpoints', 'mpp_drivedate', 'mpp_yearsofsafedrive', 'mpp_ysdasofdate', 'mpp_mt_type_loaded', 'mpp_mt_type_empty', 'mpp_gender', 'mpp_aceid', 'mpp_aceidtype', 'mpp_proximitycardid', 'mpp_citizenship_status', 'mpp_citizenship_country', 'mpp_pta_date', 'bis_legalname', 'mpp_email', 'bis_float', 'bis_schedule', 'mpp_shiftnumber', 'mpp_eff_date', 'mpp_tuitioncost', 'mpp_forgive_amt', 'mpp_forgive_week_crd_amt', 'mpp_forgive_period', 'mpp_contribution_amt', 'mpp_cont_period', 'mpp_cont_week_amt', 'mpp_forgive_crd_nbr', 'mpp_cont_ded_nbr', 'mpp_eligible_start_date', 'mpp_tuition_acct_status', 'mpp_train_anv_bonus_pd', 'mpp_forgive_remain_balance', 'mpp_cont_remain_balance', 'mpp_train_anv_bonus_elig_date', 'mpp_train_anv_bonus_amt', 'mpp_updt_forgive_crd_nbr', 'mpp_updt_cont_ded_nbr', 'mpp_updt_forgive_remain_balance', 'mpp_updt_cont_remain_balance', 'mpp_comment1', 'mpp_cyclic_dsp_enabled', 'mpp_preassign_ack_required', 'mpp_shift_start', 'mpp_shift_end', 'mpp_prior_cmp_othertype1', 'mpp_next_cmp_othertype1', 'mpp_hrs_dbl_time', 'mpp_override_default_ot', 'mpp_csa_score', 'mpp_driverlogtype', 'mpp_driverlogGroups', 'mpp_driverlogTerminal', 'mpp_advance_rate_solo', 'mpp_advance_rate_team', 'rowsec_rsrv_id', 'sth_id', 'sth_startdate', 'mpp_default_shiftstart', 'mpp_default_shiftend', 'mpp_milestonext', 'mpp_next_stopnumber', 'mpp_next_legnumber', 'mpp_next_stoparrival', 'mpp_last_calcdate', 'mpp_lastmobilecomm', 'mpp_default_shiftpriority', 'mpp_employeetype', 'mpp_timeoffbetweenduty', 'bis_shirtsize', 'mpp_gps_heading', 'mpp_gps_speed', 'mpp_mcommID', 'mpp_mcommType', 'mpp_hosstatus', 'mpp_hosstatusdate', 'mpp_hosactivityupdateon', 'mpp_last_DailyLogsDate', 'mpp_last_DailyLogsConfirmedDate', 'mpp_hos_poll_required', 'mpp_fourteenhrest', 'mpp_subsistence_eligible', 'mpp_subsistence_home_cmp_id', 'mpp_subsistence_pay_radius', 'mpp_subsistence_use_at_home', 'mpp_subsistence_cmp_id', 'mpp_grandfather_date', 'mpp_trainee', 'mpp_trainer', 'PayScheduleId', 'bis_participantID', 'mpp_rtw_date', 'guaranteed_pay_promised', 'CompensationType', 'bis_tractorOwner1', 'bis_tractorOwner2', 'OriginDestinationOption', 'mpp_carrier', 'mpp_note', 'mpp_note_updatedate', 'mpp_alternate_servicerule', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';

    // Relationships

    /**
     * @return HasMany<LegHeader>
     */
    public function legHeaders(): HasMany
    {
        return $this->hasMany(LegHeader::class, 'lgh_driver1', 'mpp_id')
            ->orWhere('lgh_driver2', 'mpp_id');

    }

    /**
     * @return HasMany<Event>
     */
    public function events(): HasMany
    {
        return $this->hasMany(Event::class, 'evt_driver1', 'mpp_id')
            ->orWhere('evt_driver2', 'mpp_id');

    }
}
