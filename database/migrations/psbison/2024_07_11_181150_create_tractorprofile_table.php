<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('tractorprofile', function (Blueprint $table) {
            $table->string('trc_number', 8);
            $table->string('trc_owner', 12);
            $table->string('trc_make', 8)->nullable();
            $table->string('trc_model', 8)->nullable();
            $table->integer('trc_currenthub')->nullable();
            $table->string('trc_type1', 6)->nullable();
            $table->string('trc_type2', 6)->nullable();
            $table->string('trc_type3', 6)->nullable();
            $table->string('trc_type4', 6)->nullable();
            $table->integer('trc_year')->nullable();
            $table->dateTime('trc_startdate')->nullable();
            $table->dateTime('trc_retiredate')->nullable();
            $table->float('trc_mpg', 53, 0)->nullable();
            $table->string('trc_company', 6)->nullable();
            $table->string('trc_division', 6)->nullable();
            $table->string('trc_fleet', 6)->nullable();
            $table->string('trc_terminal', 6)->nullable();
            $table->dateTime('trc_dateacquired')->nullable();
            $table->integer('trc_origmileage')->nullable();
            $table->integer('trc_enginehrs')->nullable();
            $table->string('trc_enginemake', 10)->nullable();
            $table->string('trc_enginemodel', 10)->nullable();
            $table->string('trc_engineserial', 20)->nullable();
            $table->string('trc_serial', 20)->nullable();
            $table->string('trc_licstate', 6)->nullable();
            $table->string('trc_licnum', 12)->nullable();
            $table->float('trc_origcost', 53, 0)->nullable();
            $table->float('trc_opercostpermi', 53, 0)->nullable();
            $table->integer('trc_grosswgt')->nullable();
            $table->smallInteger('trc_axles')->nullable();
            $table->integer('trc_warrantydays')->nullable();
            $table->string('trc_commethod', 6)->nullable();
            $table->string('trc_status', 6)->nullable();
            $table->dateTime('trc_avl_date')->nullable();
            $table->string('trc_avl_cmp_id', 8)->nullable();
            $table->integer('trc_avl_city')->nullable();
            $table->string('trc_avl_status', 6)->nullable();
            $table->dateTime('trc_pln_date')->nullable();
            $table->string('trc_pln_cmp_id', 8)->nullable();
            $table->integer('trc_pln_city')->nullable();
            $table->integer('trc_pln_lgh')->nullable();
            $table->integer('trc_avl_lgh')->nullable();
            $table->integer('trc_cur_mileage')->nullable();
            $table->string('trc_driver', 8)->nullable();
            $table->string('timestamp')->nullable();
            $table->string('trc_actg_type', 1)->nullable();
            $table->string('trc_driver2', 8)->nullable();
            $table->string('trc_misc1', 254)->nullable();
            $table->string('trc_misc2', 254)->nullable();
            $table->string('trc_misc3', 254)->nullable();
            $table->string('trc_misc4', 254)->nullable();
            $table->string('trc_updatedby', 256)->nullable();
            $table->dateTime('trc_turndown')->nullable();
            $table->string('trc_phone', 13)->nullable();
            $table->string('trc_nextdestpref', 64)->nullable();
            $table->dateTime('trc_mtcalltime')->nullable();
            $table->dateTime('trc_updatedon')->nullable();
            $table->float('trc_tareweight', 53, 0)->nullable();
            $table->string('trc_tareweight_uom', 6)->nullable();
            $table->float('trc_bmpr_to_steer', 53, 0)->nullable();
            $table->string('trc_bmpr_to_steer_uom', 6)->nullable();
            $table->float('trc_steer_to_drive1', 53, 0)->nullable();
            $table->string('trc_steer_to_drive1_uom', 6)->nullable();
            $table->float('trc_drive1_to_drive2', 53, 0)->nullable();
            $table->string('trc_drive1_to_drive2_uom', 6)->nullable();
            $table->float('trc_drive2_to_rear', 53, 0)->nullable();
            $table->string('trc_drive2_to_rear_uom', 6)->nullable();
            $table->dateTime('trc_createdate')->nullable();
            $table->integer('trc_whltobase')->nullable();
            $table->integer('trc_cabtoaxle')->nullable();
            $table->integer('trc_bprtobkcab')->nullable();
            $table->integer('trc_frontaxlspc')->nullable();
            $table->integer('trc_rearaxlspc')->nullable();
            $table->integer('trc_fifthwhltvl')->nullable();
            $table->integer('trc_dummy')->nullable();
            $table->integer('trc_ttltarewt')->nullable();
            $table->string('trc_whltobase_uom', 6)->nullable();
            $table->string('trc_cabtoaxle_uom', 6)->nullable();
            $table->string('trc_bprtobkcab_uom', 6)->nullable();
            $table->string('trc_frontaxlspc_uom', 6)->nullable();
            $table->string('trc_rearaxlspc_uom', 6)->nullable();
            $table->string('trc_fifthwhltvl_uom', 6)->nullable();
            $table->string('trc_ttltarewt_uom', 6)->nullable();
            $table->integer('trc_fifthwheelht')->nullable();
            $table->string('trc_fifthwheelht_uom', 6)->nullable();
            $table->string('trc_quickentry', 1)->nullable();
            $table->string('trc_thirdparty', 12)->nullable();
            $table->integer('trc_gal_in_tank')->nullable();
            $table->integer('trc_tank_capacity')->nullable();
            $table->string('trc_trailer1', 13)->nullable();
            $table->string('trc_trailer2', 13)->nullable();
            $table->string('trc_gps_desc')->nullable();
            $table->dateTime('trc_gps_date')->nullable();
            $table->integer('trc_gps_latitude')->nullable();
            $table->integer('trc_gps_longitude')->nullable();
            $table->string('trc_networks', 5)->nullable();
            $table->string('bis_nyhut', 10)->nullable();
            $table->dateTime('bis_nyhutexp')->nullable();
            $table->string('bis_oregon', 10)->nullable();
            $table->dateTime('bis_oregonexp')->nullable();
            $table->string('bis_newmex', 10)->nullable();
            $table->dateTime('bis_newmexexp')->nullable();
            $table->string('bis_customs', 10)->nullable();
            $table->dateTime('bis_customsexp')->nullable();
            $table->string('bis_ifta', 10)->nullable();
            $table->dateTime('bis_iftaexp')->nullable();
            $table->integer('bis_hvut')->nullable();
            $table->integer('bis_pmsched')->nullable();
            $table->integer('bis_kyu')->nullable();
            $table->string('bis_idahohm', 10)->nullable();
            $table->dateTime('bis_idahohmexp')->nullable();
            $table->dateTime('trc_exp1_date')->nullable();
            $table->dateTime('trc_exp2_date')->nullable();
            $table->integer('trc_nextmainthub')->nullable();
            $table->integer('bis_nextodom')->nullable();
            $table->integer('bis_lasttripdvir')->nullable();
            $table->dateTime('bis_lasttripdvirdate')->nullable();
            $table->string('trc_comment', 128)->nullable();
            $table->integer('bis_milessincepm')->nullable();
            $table->dateTime('bis_lastmilescalc')->nullable();
            $table->string('bis_lastwo', 10)->nullable();
            $table->dateTime('bis_lastwodate')->nullable();
            $table->integer('bis_lastwomiles')->nullable();
            $table->string('bis_nyhutold', 10)->nullable();
            $table->string('trc_checkconflict', 1)->nullable();
            $table->dateTime('trc_note_date')->nullable();
            $table->dateTime('trc_alert_date')->nullable();
            $table->string('trc_prior_event', 6)->nullable();
            $table->string('trc_prior_cmp_id', 8)->nullable();
            $table->integer('trc_prior_city')->nullable();
            $table->string('trc_prior_state', 6)->nullable();
            $table->string('trc_prior_region1', 6)->nullable();
            $table->string('trc_prior_region2', 6)->nullable();
            $table->string('trc_prior_region3', 6)->nullable();
            $table->string('trc_prior_region4', 6)->nullable();
            $table->string('trc_next_event', 6)->nullable();
            $table->string('trc_next_cmp_id', 8)->nullable();
            $table->integer('trc_next_city')->nullable();
            $table->string('trc_next_state', 6)->nullable();
            $table->string('trc_next_region1', 6)->nullable();
            $table->string('trc_next_region2', 6)->nullable();
            $table->string('trc_next_region3', 6)->nullable();
            $table->string('trc_next_region4', 6)->nullable();
            $table->integer('trc_gps_odometer')->nullable();
            $table->string('trc_require_drvtrl', 1)->nullable();
            $table->string('trc_eta_skip', 1)->nullable();
            $table->string('trc_accessorylist', 254)->nullable();
            $table->integer('trc_newused');
            $table->string('trc_gp_class', 15);
            $table->dateTime('bis_reefstart')->nullable();
            $table->string('trc_loading_class', 6)->nullable();
            $table->float('trc_axlgrp1_tarewgt', 53, 0)->nullable();
            $table->float('trc_axlgrp1_grosswgt', 53, 0)->nullable();
            $table->float('trc_axlgrp2_tarewgt', 53, 0)->nullable();
            $table->float('trc_axlgrp2_grosswgt', 53, 0)->nullable();
            $table->dateTime('trc_exp1_enddate')->nullable();
            $table->dateTime('trc_exp2_enddate')->nullable();
            $table->string('bis_FASTtransponder', 16)->nullable();
            $table->string('bis_FASTplacard', 16)->nullable();
            $table->float('bis_sftyend', 53, 0)->nullable();
            $table->tinyInteger('bis_sdrp_active')->nullable();
            $table->tinyInteger('bis_sdrp_ready')->nullable();
            $table->string('trc_m2_subconfig', 6)->nullable();
            $table->decimal('trc_lifetimemileage', 12, 1)->nullable();
            $table->string('trc_branch', 12)->nullable();
            $table->string('trc_usegeofencing', 1)->nullable();
            $table->string('trc_mctid', 20)->nullable();
            $table->string('trc_carrier', 8)->nullable();
            $table->string('trc_aceid', 15)->nullable();
            $table->string('trc_transponder', 50)->nullable();
            $table->string('trc_dotnumber', 18)->nullable();
            $table->string('trc_insurance_co', 60)->nullable();
            $table->string('trc_insurance_policy', 50)->nullable();
            $table->string('trc_insurance_year', 4)->nullable();
            $table->integer('trc_insurance_amt')->nullable();
            $table->string('trc_aceidtype', 6)->nullable();
            $table->string('trc_liccountry', 50)->nullable();
            $table->string('bis_IRP', 10)->nullable();
            $table->dateTime('bis_IRPexp')->nullable();
            $table->string('trc_email', 50)->nullable();
            $table->dateTime('trc_lastpos_datetime')->nullable();
            $table->float('trc_lastpos_lat', 53, 0)->nullable();
            $table->float('trc_lastpos_long', 53, 0)->nullable();
            $table->string('trc_lastpos_nearctynme', 30)->nullable();
            $table->string('trc_lastpos_nearctyste', 30)->nullable();
            $table->string('trc_mobcommtype', 20)->nullable();
            $table->string('trc_comment1')->nullable();
            $table->string('trc_cyclic_dsp_enabled', 1)->nullable();
            $table->string('trc_preassign_ack_required', 1)->nullable();
            $table->float('trc_suggested_paypercent', 53, 0);
            $table->string('trc_prior_cmp_othertype1', 6)->nullable();
            $table->string('trc_next_cmp_othertype1', 6)->nullable();
            $table->dateTime('bison_lastcleaned')->nullable();
            $table->integer('bison_flags')->nullable();
            $table->string('bison_keys', 6)->nullable();
            $table->string('bison_clean', 6)->nullable();
            $table->string('trc_dailyflag', 1)->nullable();
            $table->dateTime('trc_dailyflagdate')->nullable();
            $table->decimal('trc_distancecost_rate', 19, 4)->nullable();
            $table->decimal('trc_costperhour', 19, 4)->nullable();
            $table->integer('rowsec_rsrv_id')->nullable();
            $table->integer('trc_milestonext')->nullable();
            $table->integer('trc_next_stopnumber')->nullable();
            $table->integer('trc_next_legnumber')->nullable();
            $table->dateTime('trc_next_stoparrival')->nullable();
            $table->dateTime('trc_last_calcdate')->nullable();
            $table->string('trc_altid', 25)->nullable();
            $table->dateTime('bis_leaseend')->nullable();
            $table->integer('bis_leasemiles')->nullable();
            $table->integer('bis_lastodom')->nullable();
            $table->string('trc_timezone', 10)->nullable();
            $table->float('trc_gps_heading', 53, 0)->nullable();
            $table->integer('trc_gps_speed')->nullable();
            $table->decimal('trc_advpercent', 5, 4)->nullable();
            $table->string('trc_optimization_modeling_flag', 1)->nullable();
            $table->string('trc_fueltype', 8)->nullable();
            $table->string('trc_mcommtrlid', 13)->nullable();
            $table->string('trc_mcommID', 30)->nullable();
            $table->string('trc_mcommType', 6)->nullable();
            $table->integer('trc_DEFCapacity')->nullable();
            $table->integer('trc_DEFLevel')->nullable();
            $table->string('trc_ams_type', 12)->nullable();
            $table->string('trc_owner2', 12)->nullable();
            $table->float('trc_ownerpct', 53, 0)->nullable();
            $table->string('trc_optimization_staging_customer', 8)->nullable();
            $table->string('trc_reload_status', 6)->nullable();
            $table->dateTime('trc_grandfather_date')->nullable();
            $table->dateTime('trc_pta_date')->nullable();
            $table->dateTime('trc_optimizationdate')->nullable();
            $table->string('trc_teamleader', 6)->nullable();
            $table->integer('PayScheduleId')->nullable();
            $table->string('trc_app_eqcodes', 256)->nullable();
            $table->string('trc_geo_process_oo', 1)->nullable();
            $table->string('trc_geo_send_oo', 1)->nullable();
            $table->string('trc_geo_process', 1)->nullable();
            $table->string('trc_geo_send', 1)->nullable();
            $table->text('bison_tractornote')->nullable();
            $table->string('OriginDestinationOption', 6)->nullable();
            $table->string('trc_use_rfid', 1)->nullable();
            $table->string('trc_rfid_tag', 24)->nullable();
            $table->string('bis_wgtclass', 10)->nullable();
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('tractorprofile');
    }
};
