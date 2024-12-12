<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('carrier', function (Blueprint $table) {
            $table->string('car_id', 8);
            $table->string('car_name', 64);
            $table->string('car_fedid', 10)->nullable();
            $table->string('car_address1', 64)->nullable();
            $table->string('car_address2', 64)->nullable();
            $table->integer('cty_code')->nullable();
            $table->string('car_zip', 10)->nullable();
            $table->string('pto_id', 12)->nullable();
            $table->string('car_scac', 4)->nullable();
            $table->string('car_contact', 25)->nullable();
            $table->string('car_type1', 6)->nullable();
            $table->string('car_type2', 6)->nullable();
            $table->string('car_type3', 6)->nullable();
            $table->string('car_type4', 6)->nullable();
            $table->string('car_misc1', 450)->nullable();
            $table->string('car_misc2', 450)->nullable();
            $table->string('car_misc3', 450)->nullable();
            $table->string('car_misc4', 450)->nullable();
            $table->string('car_phone1', 10)->nullable();
            $table->string('car_phone2', 10)->nullable();
            $table->string('car_phone3', 10)->nullable();
            $table->dateTime('car_lastactivity')->nullable();
            $table->string('car_actg_type', 6)->nullable();
            $table->string('car_iccnum', 50)->nullable();
            $table->string('car_contract', 20)->nullable();
            $table->string('car_otherid', 8)->nullable();
            $table->string('car_usecashcard', 1)->nullable();
            $table->string('car_status', 6)->nullable();
            $table->string('car_board', 1)->nullable();
            $table->string('car_updatedby', 20)->nullable();
            $table->dateTime('car_updateddate')->nullable();
            $table->dateTime('car_createdate')->nullable();
            $table->dateTime('car_exp1_date')->nullable();
            $table->dateTime('car_exp2_date')->nullable();
            $table->dateTime('car_terminationdt')->nullable();
            $table->string('car_email', 128)->nullable();
            $table->string('car_service_location', 1)->nullable();
            $table->string('car_currency', 6);
            $table->string('car_country', 6)->nullable();
            $table->string('car_gp_class', 11);
            $table->string('car_agent', 8);
            $table->integer('YTDcount')->nullable();
            $table->integer('YTDlates')->nullable();
            $table->integer('prevYearCount')->nullable();
            $table->integer('prevYearLates')->nullable();
            $table->string('car_trltype1', 6)->nullable();
            $table->string('car_trltype2', 6)->nullable();
            $table->string('car_trltype3', 6)->nullable();
            $table->string('car_trltype4', 6)->nullable();
            $table->integer('car_ins_cargolimits')->nullable();
            $table->integer('car_ins_liabilitylimits')->nullable();
            $table->string('car_ins_certificate', 1)->nullable();
            $table->string('car_ins_w9', 1)->nullable();
            $table->string('car_ins_contract', 1)->nullable();
            $table->dateTime('car_exp1_enddate')->nullable();
            $table->dateTime('car_exp2_enddate')->nullable();
            $table->string('car_rating', 12)->nullable();
            $table->string('car_branch', 12)->nullable();
            $table->string('car_dotnum', 20)->nullable();
            $table->integer('car_204flag')->nullable();
            $table->integer('car_210flag')->nullable();
            $table->integer('car_214flag')->nullable();
            $table->string('car_quickentry', 1);
            $table->integer('car_loads_offered')->nullable();
            $table->integer('car_loads_responded_to')->nullable();
            $table->integer('car_loads_not_responded_to')->nullable();
            $table->integer('car_loads_awarded')->nullable();
            $table->integer('car_loads_on_time')->nullable();
            $table->tinyInteger('car_confirmprint')->nullable();
            $table->tinyInteger('car_confirmfax')->nullable();
            $table->tinyInteger('car_confirmemail')->nullable();
            $table->string('car_confirmpathname', 256)->nullable();
            $table->string('car_411_monitored', 1)->nullable();
            $table->integer('car_confirm_ir_id')->nullable();
            $table->integer('car_confirm_irk_id')->nullable();
            $table->string('car_confirm_type', 6)->nullable();
            $table->string('car_204tender', 1)->nullable();
            $table->string('car_204update', 3)->nullable();
            $table->string('car_extequip_interval_warnlevel', 6)->nullable();
            $table->integer('car_extequip_interval_hours')->nullable();
            $table->integer('car_extequip_interval_maxcount')->nullable();
            $table->string('car_fgt_pay_terms', 6)->nullable();
            $table->smallInteger('car_hazmat')->nullable();
            $table->dateTime('car_approval_dt')->nullable();
            $table->string('car_sub_iccnum', 12)->nullable();
            $table->smallInteger('car_eft_flag')->nullable();
            $table->string('car_web_address', 128)->nullable();
            $table->string('car_region_type', 6)->nullable();
            $table->string('car_manager', 6)->nullable();
            $table->string('car_tier_rating', 6)->nullable();
            $table->string('car_tenderloadby', 1)->nullable();
            $table->integer('car_204validate')->nullable();
            $table->integer('rowsec_rsrv_id')->nullable();
            $table->string('car_CRMType', 6)->nullable();
            $table->string('dw_timestamp');
            $table->string('car_mt_type_loaded', 4)->nullable();
            $table->string('car_mt_type_empty', 4)->nullable();
            $table->integer('car_204_cancel_new')->nullable();
            $table->string('car_fuel_card_account_id', 6)->nullable();
            $table->string('car_fuel_card_pay_type', 32)->nullable();
            $table->string('car_report_url', 300)->nullable();
            $table->integer('PayScheduleId')->nullable();
            $table->string('car_dispatch_compute_on_save', 1)->nullable();
            $table->string('car_CarrierWatch_monitored', 6)->nullable();
            $table->string('OriginDestinationOption', 6)->nullable();
            $table->string('external_type', 50)->nullable();
            $table->integer('car_score')->nullable();
            $table->string('car_preventrating', 1)->nullable();
            $table->string('car_req_cin', 1)->nullable();
            $table->string('car_fuel_card_carrier_id', 6)->nullable();
            $table->string('car_RateBy', 1)->nullable();
            $table->float('car_ctw_conv', 53, 0)->nullable();
            $table->float('car_ctw_break', 53, 0)->nullable();
            $table->float('car_wtc_conv', 53, 0)->nullable();
            $table->string('car_ctw_weightunits', 6)->nullable();
            $table->string('car_ctw_volumeunits', 6)->nullable();
            $table->string('car_relationship', 1)->nullable();
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('carrier');
    }
};
