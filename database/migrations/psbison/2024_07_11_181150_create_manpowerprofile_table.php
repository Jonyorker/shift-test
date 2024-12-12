<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('manpowerprofile', function (Blueprint $table) {
            $table->string('mpp_id', 8);
            $table->string('mpp_type', 6)->nullable();
            $table->string('mpp_tractornumber', 8)->nullable();
            $table->string('mpp_otherid', 25)->nullable();
            $table->string('mpp_employedby', 12)->nullable();
            $table->string('mpp_firstname', 40)->nullable();
            $table->string('mpp_middlename', 1)->nullable();
            $table->string('mpp_lastname', 40)->nullable();
            $table->string('mpp_ssn', 20)->nullable();
            $table->string('mpp_address1', 30)->nullable();
            $table->string('mpp_address2', 30)->nullable();
            $table->integer('mpp_city')->nullable();
            $table->string('mpp_state', 6)->nullable();
            $table->string('mpp_zip', 10)->nullable();
            $table->dateTime('mpp_hiredate')->nullable();
            $table->dateTime('mpp_senioritydate')->nullable();
            $table->string('mpp_licensestate', 6)->nullable();
            $table->string('mpp_licenseclass', 15)->nullable();
            $table->string('mpp_licensenumber', 25)->nullable();
            $table->dateTime('mpp_dateofbirth')->nullable();
            $table->string('mpp_currentphone', 20)->nullable();
            $table->string('mpp_alternatephone', 20)->nullable();
            $table->string('mpp_homephone', 20)->nullable();
            $table->string('mpp_type1', 6)->nullable();
            $table->string('mpp_type2', 6)->nullable();
            $table->string('mpp_type3', 6)->nullable();
            $table->string('mpp_type4', 6)->nullable();
            $table->string('mpp_currency', 6)->nullable();
            $table->string('mpp_payto', 12)->nullable();
            $table->integer('mpp_singlemilerate')->nullable();
            $table->integer('mpp_teammilerate')->nullable();
            $table->decimal('mpp_hourlyrate', 5)->nullable();
            $table->integer('mpp_revenuerate')->nullable();
            $table->string('mpp_teamleader', 6)->nullable();
            $table->string('mpp_fleet', 6)->nullable();
            $table->string('mpp_division', 6)->nullable();
            $table->string('mpp_domicile', 6)->nullable();
            $table->string('mpp_company', 8)->nullable();
            $table->string('mpp_terminal', 8)->nullable();
            $table->string('mpp_status', 6)->nullable();
            $table->string('mpp_emerphone', 20)->nullable();
            $table->string('mpp_emername', 40)->nullable();
            $table->string('mpp_voicemailbox', 20)->nullable();
            $table->dateTime('mpp_terminationdt')->nullable();
            $table->dateTime('mpp_avl_date')->nullable();
            $table->string('mpp_avl_cmp_id', 8)->nullable();
            $table->integer('mpp_avl_city')->nullable();
            $table->string('mpp_avl_status', 6)->nullable();
            $table->dateTime('mpp_pln_date')->nullable();
            $table->string('mpp_pln_cmp_id', 8)->nullable();
            $table->integer('mpp_pln_city')->nullable();
            $table->integer('mpp_pln_lgh')->nullable();
            $table->integer('mpp_avl_lgh')->nullable();
            $table->string('mpp_lastfirst', 45)->nullable();
            $table->string('timestamp')->nullable();
            $table->string('mpp_actg_type', 1)->nullable();
            $table->dateTime('mpp_last_home')->nullable();
            $table->dateTime('mpp_want_home')->nullable();
            $table->string('mpp_misc1', 254)->nullable();
            $table->string('mpp_misc2', 254)->nullable();
            $table->string('mpp_misc3', 254)->nullable();
            $table->string('mpp_misc4', 254)->nullable();
            $table->string('mpp_usecashcard', 1)->nullable();
            $table->string('mpp_updatedby', 256)->nullable();
            $table->string('mpp_bmp_pathname', 64)->nullable();
            $table->dateTime('mpp_updateon')->nullable();
            $table->dateTime('mpp_createdate')->nullable();
            $table->string('mpp_quickentry', 1)->nullable();
            $table->string('mpp_servicerule', 6)->nullable();
            $table->string('mpp_gps_desc', 45)->nullable();
            $table->dateTime('mpp_gps_date')->nullable();
            $table->integer('mpp_gps_latitude')->nullable();
            $table->integer('mpp_gps_longitude')->nullable();
            $table->smallInteger('mpp_travel_minutes')->nullable();
            $table->smallInteger('mpp_mile_day7')->nullable();
            $table->integer('mpp_home_latitude')->nullable();
            $table->integer('mpp_home_longitude')->nullable();
            $table->dateTime('mpp_last_log_date')->nullable();
            $table->float('mpp_hours1', 53, 0)->nullable();
            $table->float('mpp_hours2', 53, 0)->nullable();
            $table->float('mpp_hours3', 53, 0)->nullable();
            $table->string('mpp_home_city', 45)->nullable();
            $table->float('mpp_hours4', 53, 0)->nullable();
            $table->dateTime('mpp_exp1_date')->nullable();
            $table->dateTime('mpp_exp2_date')->nullable();
            $table->float('bis_sftystart', 53, 0)->nullable();
            $table->float('bis_sftyend', 53, 0)->nullable();
            $table->float('bis_sftyaward', 53, 0)->nullable();
            $table->float('bis_maxever', 53, 0)->nullable();
            $table->float('bis_sftylstaward', 53, 0)->nullable();
            $table->float('bis_sftylststart', 53, 0)->nullable();
            $table->float('bis_sftylstend', 53, 0)->nullable();
            $table->string('mpp_next_event', 6)->nullable();
            $table->string('mpp_next_cmp_id', 8)->nullable();
            $table->integer('mpp_next_city')->nullable();
            $table->string('mpp_next_state', 6)->nullable();
            $table->string('mpp_next_region1', 6)->nullable();
            $table->string('mpp_next_region2', 6)->nullable();
            $table->string('mpp_next_region3', 6)->nullable();
            $table->string('mpp_next_region4', 6)->nullable();
            $table->string('mpp_prior_event', 6)->nullable();
            $table->string('mpp_prior_cmp_id', 8)->nullable();
            $table->integer('mpp_prior_city')->nullable();
            $table->string('mpp_prior_state', 6)->nullable();
            $table->string('mpp_prior_region1', 6)->nullable();
            $table->string('mpp_prior_region2', 6)->nullable();
            $table->string('mpp_prior_region3', 6)->nullable();
            $table->string('mpp_prior_region4', 6)->nullable();
            $table->float('mpp_dailyhrsest', 53, 0)->nullable();
            $table->float('mpp_weeklyhrsest', 53, 0)->nullable();
            $table->string('mpp_lastlog_cmp_id', 8)->nullable();
            $table->dateTime('mpp_lastlog_estdate')->nullable();
            $table->string('mpp_lastlog_cmp_name', 30)->nullable();
            $table->dateTime('mpp_estlog_datetime')->nullable();
            $table->string('bis_mailbox', 10)->nullable();
            $table->integer('mpp_gps_odometer')->nullable();
            $table->string('bis_mailboxkey', 10)->nullable();
            $table->string('bis_nmstct', 30)->nullable();
            $table->integer('bis_sglrate')->nullable();
            $table->integer('bis_dblrate')->nullable();
            $table->string('bis_club', 10)->nullable();
            $table->string('bis_password', 20)->nullable();
            $table->float('bis_h8_day1', 53, 0)->nullable();
            $table->float('bis_h8_day2', 53, 0)->nullable();
            $table->float('bis_h8_day3', 53, 0)->nullable();
            $table->float('bis_h14_day1', 53, 0)->nullable();
            $table->float('bis_h14_day2', 53, 0)->nullable();
            $table->float('bis_h14_day3', 53, 0)->nullable();
            $table->dateTime('bis_todaystart')->nullable();
            $table->integer('bis_noyestlog')->nullable();
            $table->integer('bis_milestoday')->nullable();
            $table->string('mpp_password', 30)->nullable();
            $table->smallInteger('mpp_ArvDep_Allowance_mins')->nullable();
            $table->float('mpp_hours1_week', 53, 0)->nullable();
            $table->string('mpp_qualificationlist', 254)->nullable();
            $table->string('mpp_country', 6)->nullable();
            $table->string('mpp_gp_class', 11);
            $table->tinyInteger('bis_minority')->nullable();
            $table->tinyInteger('bis_aboriginal')->nullable();
            $table->tinyInteger('bis_disability')->nullable();
            $table->string('bis_gender', 1)->nullable();
            $table->string('bis_knownas', 50)->nullable();
            $table->tinyInteger('mpp_nbrdependents')->nullable();
            $table->decimal('mpp_avghourlypay', 19, 4)->nullable();
            $table->decimal('mpp_avgperiodpay', 19, 4)->nullable();
            $table->decimal('mpp_dailyguarenteedhours', 19, 4)->nullable();
            $table->decimal('mpp_periodguarenteedhours', 19, 4)->nullable();
            $table->string('mpp_comparisonflag', 1)->nullable();
            $table->dateTime('mpp_exp1_enddate')->nullable();
            $table->dateTime('mpp_exp2_enddate')->nullable();
            $table->float('bis_vacpay', 53, 0)->nullable();
            $table->string('bis_tcgterminal', 6)->nullable();
            $table->tinyInteger('bis_sdrp_active')->nullable();
            $table->tinyInteger('bis_sdrp_ready')->nullable();
            $table->dateTime('mpp_bid_next_starttime')->nullable();
            $table->decimal('mpp_bid_next_hours', 4)->nullable();
            $table->string('mpp_bid_next_type', 6)->nullable();
            $table->string('mpp_bid_next_routestore', 8)->nullable();
            $table->dateTime('mpp_90daystart')->nullable();
            $table->string('mpp_branch', 12)->nullable();
            $table->integer('rec_id')->nullable();
            $table->string('mpp_perdiem_flag', 1)->nullable();
            $table->dateTime('mpp_perdiem_eff_date')->nullable();
            $table->string('mpp_athome_terminal', 8)->nullable();
            $table->tinyInteger('mpp_cmpissuedpoints')->nullable();
            $table->dateTime('mpp_drivedate')->nullable();
            $table->tinyInteger('mpp_yearsofsafedrive')->nullable();
            $table->dateTime('mpp_ysdasofdate')->nullable();
            $table->string('mpp_mt_type_loaded', 4)->nullable();
            $table->string('mpp_mt_type_empty', 4)->nullable();
            $table->string('mpp_gender', 1)->nullable();
            $table->string('mpp_aceid', 15)->nullable();
            $table->string('mpp_aceidtype', 6)->nullable();
            $table->string('mpp_proximitycardid', 18)->nullable();
            $table->string('mpp_citizenship_status', 6)->nullable();
            $table->string('mpp_citizenship_country', 50)->nullable();
            $table->dateTime('mpp_pta_date')->nullable();
            $table->string('bis_legalname', 40)->nullable();
            $table->string('mpp_email', 50)->nullable();
            $table->string('bis_float', 6)->nullable();
            $table->string('bis_schedule', 80)->nullable();
            $table->string('mpp_shiftnumber', 6)->nullable();
            $table->dateTime('mpp_eff_date')->nullable();
            $table->decimal('mpp_tuitioncost', 18)->nullable();
            $table->decimal('mpp_forgive_amt', 18)->nullable();
            $table->decimal('mpp_forgive_week_crd_amt', 18)->nullable();
            $table->integer('mpp_forgive_period')->nullable();
            $table->decimal('mpp_contribution_amt', 18)->nullable();
            $table->integer('mpp_cont_period')->nullable();
            $table->decimal('mpp_cont_week_amt', 18)->nullable();
            $table->integer('mpp_forgive_crd_nbr')->nullable();
            $table->integer('mpp_cont_ded_nbr')->nullable();
            $table->dateTime('mpp_eligible_start_date')->nullable();
            $table->string('mpp_tuition_acct_status', 1)->nullable();
            $table->dateTime('mpp_train_anv_bonus_pd')->nullable();
            $table->decimal('mpp_forgive_remain_balance', 18)->nullable();
            $table->decimal('mpp_cont_remain_balance', 18)->nullable();
            $table->dateTime('mpp_train_anv_bonus_elig_date')->nullable();
            $table->decimal('mpp_train_anv_bonus_amt', 18)->nullable();
            $table->integer('mpp_updt_forgive_crd_nbr')->nullable();
            $table->integer('mpp_updt_cont_ded_nbr')->nullable();
            $table->decimal('mpp_updt_forgive_remain_balance', 18)->nullable();
            $table->decimal('mpp_updt_cont_remain_balance', 18)->nullable();
            $table->string('mpp_comment1')->nullable();
            $table->string('mpp_cyclic_dsp_enabled', 1)->nullable();
            $table->string('mpp_preassign_ack_required', 1)->nullable();
            $table->dateTime('mpp_shift_start')->nullable();
            $table->dateTime('mpp_shift_end')->nullable();
            $table->string('mpp_prior_cmp_othertype1', 6)->nullable();
            $table->string('mpp_next_cmp_othertype1', 6)->nullable();
            $table->decimal('mpp_hrs_dbl_time', 19, 4)->nullable();
            $table->string('mpp_override_default_ot', 1)->nullable();
            $table->integer('mpp_csa_score')->nullable();
            $table->string('mpp_driverlogtype', 6)->nullable();
            $table->string('mpp_driverlogGroups')->nullable();
            $table->string('mpp_driverlogTerminal')->nullable();
            $table->decimal('mpp_advance_rate_solo', 19, 4)->nullable();
            $table->decimal('mpp_advance_rate_team', 19, 4)->nullable();
            $table->integer('rowsec_rsrv_id')->nullable();
            $table->integer('sth_id')->nullable();
            $table->dateTime('sth_startdate')->nullable();
            $table->dateTime('mpp_default_shiftstart')->nullable();
            $table->dateTime('mpp_default_shiftend')->nullable();
            $table->integer('mpp_milestonext')->nullable();
            $table->integer('mpp_next_stopnumber')->nullable();
            $table->integer('mpp_next_legnumber')->nullable();
            $table->dateTime('mpp_next_stoparrival')->nullable();
            $table->dateTime('mpp_last_calcdate')->nullable();
            $table->dateTime('mpp_lastmobilecomm')->nullable();
            $table->string('mpp_default_shiftpriority', 6)->nullable();
            $table->string('mpp_employeetype', 1)->nullable();
            $table->decimal('mpp_timeoffbetweenduty', 5)->nullable();
            $table->string('bis_shirtsize', 2)->nullable();
            $table->float('mpp_gps_heading', 53, 0)->nullable();
            $table->integer('mpp_gps_speed')->nullable();
            $table->string('mpp_mcommID', 30)->nullable();
            $table->string('mpp_mcommType', 6)->nullable();
            $table->integer('mpp_hosstatus')->nullable();
            $table->dateTime('mpp_hosstatusdate')->nullable();
            $table->dateTime('mpp_hosactivityupdateon')->nullable();
            $table->dateTime('mpp_last_DailyLogsDate')->nullable();
            $table->dateTime('mpp_last_DailyLogsConfirmedDate')->nullable();
            $table->string('mpp_hos_poll_required', 1)->nullable();
            $table->float('mpp_fourteenhrest', 53, 0)->nullable();
            $table->string('mpp_subsistence_eligible', 1)->nullable();
            $table->string('mpp_subsistence_home_cmp_id', 8)->nullable();
            $table->float('mpp_subsistence_pay_radius', 53, 0)->nullable();
            $table->string('mpp_subsistence_use_at_home', 1)->nullable();
            $table->string('mpp_subsistence_cmp_id', 8)->nullable();
            $table->dateTime('mpp_grandfather_date')->nullable();
            $table->string('mpp_trainee', 1)->nullable();
            $table->string('mpp_trainer', 1)->nullable();
            $table->integer('PayScheduleId')->nullable();
            $table->integer('bis_participantID')->nullable();
            $table->dateTime('mpp_rtw_date')->nullable();
            $table->decimal('guaranteed_pay_promised', 19, 4)->nullable();
            $table->string('CompensationType', 6)->nullable();
            $table->string('bis_tractorOwner1', 8)->nullable();
            $table->string('bis_tractorOwner2', 8)->nullable();
            $table->string('OriginDestinationOption', 6)->nullable();
            $table->string('mpp_carrier', 8)->nullable();
            $table->string('mpp_note', 120)->nullable();
            $table->dateTime('mpp_note_updatedate')->nullable();
            $table->string('mpp_alternate_servicerule', 6)->nullable();
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('manpowerprofile');
    }
};
