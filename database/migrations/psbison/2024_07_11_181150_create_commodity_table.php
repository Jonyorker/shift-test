<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('commodity', function (Blueprint $table) {
            $table->string('cmd_code', 8);
            $table->string('cmd_name', 60);
            $table->string('cmd_class', 8)->nullable();
            $table->string('cmd_pin', 8)->nullable();
            $table->string('cmd_stcc', 8)->nullable();
            $table->integer('cmd_hazardous')->nullable();
            $table->integer('cmd_code_num');
            $table->string('timestamp')->nullable();
            $table->string('cmd_misc1', 254)->nullable();
            $table->string('cmd_misc2', 254)->nullable();
            $table->string('cmd_misc3', 254)->nullable();
            $table->string('cmd_misc4', 254)->nullable();
            $table->float('cmd_specificgravity', 53, 0)->nullable();
            $table->float('cmd_gravtemperature', 53, 0)->nullable();
            $table->string('cmd_temperatureunit', 6)->nullable();
            $table->string('cmd_taxtable1', 1)->nullable();
            $table->string('cmd_taxtable2', 1)->nullable();
            $table->string('cmd_taxtable3', 1)->nullable();
            $table->string('cmd_taxtable4', 1)->nullable();
            $table->string('cmd_updatedby', 256)->nullable();
            $table->dateTime('cmd_updateddate')->nullable();
            $table->dateTime('cmd_createdate')->nullable();
            $table->string('cmd_active', 1)->nullable();
            $table->string('cmd_cust_num', 20)->nullable();
            $table->string('cmd_dot_name', 60)->nullable();
            $table->string('cmd_haz_num', 20)->nullable();
            $table->string('cmd_waste_code', 20)->nullable();
            $table->string('cmd_haz_class', 6)->nullable();
            $table->string('cmd_haz_subclass', 6)->nullable();
            $table->string('cmd_pin_flag', 1)->nullable();
            $table->string('cmd_risk', 20)->nullable();
            $table->string('cmd_marine', 1)->nullable();
            $table->string('cmd_spec_prov', 60)->nullable();
            $table->string('cmd_cmp_id', 8)->nullable();
            $table->float('cmd_flash_point', 53, 0)->nullable();
            $table->string('cmd_flash_unit', 6)->nullable();
            $table->dateTime('cmd_msds_dt')->nullable();
            $table->float('cmd_min_spill', 53, 0)->nullable();
            $table->string('cmd_health_note')->nullable();
            $table->string('cmd_flammable_note')->nullable();
            $table->string('cmd_reactivity_note')->nullable();
            $table->string('cmd_ppe_note')->nullable();
            $table->string('cmd_driver_note')->nullable();
            $table->float('cmd_ph', 53, 0)->nullable();
            $table->string('cmd_color', 20)->nullable();
            $table->string('cmd_water_soluble', 1)->nullable();
            $table->string('cmd_top_load', 1)->nullable();
            $table->string('cmd_viscosity', 20)->nullable();
            $table->string('cmd_spec_prep')->nullable();
            $table->string('cmd_foaming', 1)->nullable();
            $table->string('cmd_osha')->nullable();
            $table->string('cmd_createdby', 20)->nullable();
            $table->string('cmd_trl_wash_notes')->nullable();
            $table->string('cmd_custom_wash', 1)->nullable();
            $table->string('cmd_makeup_description', 100)->nullable();
            $table->string('cmd_imdg_class', 6)->nullable();
            $table->string('cmd_imdg_subclass', 6)->nullable();
            $table->string('cmd_adr_class', 6)->nullable();
            $table->string('cmd_adr_packaging_group', 15)->nullable();
            $table->string('cmd_adr_trem', 50)->nullable();
            $table->string('cmd_imdg_packaging_group', 15)->nullable();
            $table->string('cmd_imdg_trem', 50)->nullable();
            $table->string('cmd_haz_subclass2', 6)->nullable();
            $table->string('cmd_imdg_subclass2', 6)->nullable();
            $table->float('cmd_flash_point_max', 53, 0)->nullable();
            $table->integer('cmd_non_spec')->nullable();
            $table->integer('cmd_company_prohibited')->nullable();
            $table->string('cmd_trlwsh_priority1', 6)->nullable();
            $table->string('cmd_trlwsh_priority2', 6)->nullable();
            $table->dateTime('cmd_trlwsh_priority2_begin')->nullable();
            $table->dateTime('cmd_trlwsh_priority2_end')->nullable();
            $table->float('cmd_default_length', 53, 0)->nullable();
            $table->float('cmd_default_width', 53, 0)->nullable();
            $table->float('cmd_default_height', 53, 0)->nullable();
            $table->float('cmd_default_weight', 53, 0)->nullable();
            $table->string('cmd_revtype1', 6)->nullable();
            $table->string('cmd_revtype2', 6)->nullable();
            $table->string('cmd_revtype3', 6)->nullable();
            $table->string('cmd_revtype4', 6)->nullable();
            $table->string('cmd_lghtype1', 6)->nullable();
            $table->string('cmd_lghtype2', 6)->nullable();
            $table->string('cmd_haz_contact', 30)->nullable();
            $table->string('cmd_haz_telephone', 30)->nullable();
            $table->string('cmd_class2', 8)->nullable();
            $table->string('cmd_NMFC_Class', 6)->nullable();
            $table->string('cmd_displaycolor', 100)->nullable();
            $table->string('cmd_TaxClass', 6)->nullable();
            $table->float('cmd_rvp', 53, 0)->nullable();
            $table->string('cmd_exclusive', 1);
            $table->string('cmd_app_eqcodes', 256)->nullable();
            $table->string('cmd_ams_compcode', 256)->nullable();
            $table->string('cmd_ams_reason', 256)->nullable();
            $table->string('cmd_ams_complaint', 256)->nullable();
            $table->float('cmd_size', 53, 0)->nullable();
            $table->integer('CommodityCategory')->nullable();
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('commodity');
    }
};
