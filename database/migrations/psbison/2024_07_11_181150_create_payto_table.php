<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('payto', function (Blueprint $table) {
            $table->string('timestamp')->nullable();
            $table->string('pto_id', 12);
            $table->string('pto_altid', 12)->nullable();
            $table->string('pto_fname', 20)->nullable();
            $table->string('pto_mname', 1)->nullable();
            $table->string('pto_lname', 20);
            $table->string('pto_ssn', 9)->nullable();
            $table->string('pto_address1', 30)->nullable();
            $table->string('pto_address2', 30)->nullable();
            $table->integer('pto_city')->nullable();
            $table->string('pto_zip', 10)->nullable();
            $table->string('pto_phone1', 10)->nullable();
            $table->string('pto_phone2', 10)->nullable();
            $table->string('pto_phone3', 10)->nullable();
            $table->string('pto_currency', 6)->nullable();
            $table->string('pto_type1', 6)->nullable();
            $table->string('pto_type2', 6)->nullable();
            $table->string('pto_type3', 6)->nullable();
            $table->string('pto_type4', 6)->nullable();
            $table->string('pto_company', 6)->nullable();
            $table->string('pto_division', 6)->nullable();
            $table->string('pto_terminal', 6)->nullable();
            $table->string('pto_status', 6)->nullable();
            $table->string('pto_lastfirst', 45)->nullable();
            $table->string('pto_fleet', 6)->nullable();
            $table->string('pto_misc1', 254)->nullable();
            $table->string('pto_misc2', 254)->nullable();
            $table->string('pto_misc3', 254)->nullable();
            $table->string('pto_misc4', 254)->nullable();
            $table->string('pto_updatedby', 20)->nullable();
            $table->dateTime('pto_updateddate')->nullable();
            $table->decimal('pto_yrtodategross', 19, 4)->nullable();
            $table->string('pto_socsecfedtax', 10)->nullable();
            $table->string('pto_dirdeposit', 6)->nullable();
            $table->string('pto_fleettrc', 8)->nullable();
            $table->dateTime('pto_startdate')->nullable();
            $table->dateTime('pto_terminatedate')->nullable();
            $table->dateTime('pto_createdate')->nullable();
            $table->string('pto_companyname', 65)->nullable();
            $table->string('pto_country', 6)->nullable();
            $table->string('pto_gp_class', 11);
            $table->string('pto_factorid', 12);
            $table->integer('pto_1099type');
            $table->decimal('pto_max_advance_pertrip', 7, 4);
            $table->decimal('pto_max_advance_perday', 19, 4);
            $table->integer('rowsec_rsrv_id')->nullable();
            $table->string('pto_asset_maintenance_type1', 6);
            $table->string('pto_asset_maintenance_type2', 6);
            $table->string('pto_asset_maintenance_type3', 6);
            $table->integer('pto_make_billto')->nullable();
            $table->string('brn_id', 12)->nullable();
            $table->boolean('pto_stlByPayTo')->nullable();
            $table->integer('PayScheduleId')->nullable();
            $table->dateTime('pto_arrears_start');
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('payto');
    }
};
