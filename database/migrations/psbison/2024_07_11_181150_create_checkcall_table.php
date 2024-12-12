<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('checkcall', function (Blueprint $table) {
            $table->integer('ckc_number');
            $table->string('ckc_status', 6);
            $table->string('ckc_asgntype', 6);
            $table->string('ckc_asgnid', 13)->nullable();
            $table->dateTime('ckc_date');
            $table->string('ckc_event', 6);
            $table->integer('ckc_city')->nullable();
            $table->string('ckc_comment', 254)->nullable();
            $table->string('ckc_updatedby', 20);
            $table->dateTime('ckc_updatedon');
            $table->integer('ckc_latseconds')->nullable();
            $table->integer('ckc_longseconds')->nullable();
            $table->integer('ckc_lghnumber')->nullable();
            $table->string('ckc_tractor', 8)->nullable();
            $table->string('ckc_extsensoralarm', 1)->nullable();
            $table->string('ckc_vehicleignition', 1)->nullable();
            $table->float('ckc_milesfrom', 53, 0)->nullable();
            $table->string('ckc_directionfrom', 3)->nullable();
            $table->string('ckc_validity', 6)->nullable();
            $table->string('ckc_mtavailable', 1)->nullable();
            $table->integer('ckc_minutes')->nullable();
            $table->integer('ckc_mileage')->nullable();
            $table->string('ckc_home', 1)->nullable();
            $table->string('ckc_cityname', 30)->nullable();
            $table->string('ckc_state', 6)->nullable();
            $table->string('ckc_zip', 10)->nullable();
            $table->string('ckc_commentlarge', 254)->nullable();
            $table->integer('ckc_minutes_to_final')->nullable();
            $table->integer('ckc_miles_to_final')->nullable();
            $table->integer('ckc_Odometer')->nullable();
            $table->integer('TripStatus')->nullable();
            $table->integer('ckc_odometer2')->nullable();
            $table->integer('ckc_speed')->nullable();
            $table->integer('ckc_speed2')->nullable();
            $table->float('ckc_heading', 53, 0)->nullable();
            $table->integer('ckc_gps_type')->nullable();
            $table->float('ckc_gps_miles', 53, 0)->nullable();
            $table->float('ckc_fuel_meter', 53, 0)->nullable();
            $table->integer('ckc_idle_meter')->nullable();
            $table->string('ckc_ExtraData01')->nullable();
            $table->string('ckc_ExtraData02')->nullable();
            $table->string('ckc_ExtraData03')->nullable();
            $table->string('ckc_ExtraData04')->nullable();
            $table->string('ckc_ExtraData05')->nullable();
            $table->string('ckc_ExtraData06')->nullable();
            $table->string('ckc_ExtraData07')->nullable();
            $table->string('ckc_ExtraData08')->nullable();
            $table->string('ckc_ExtraData09')->nullable();
            $table->string('ckc_ExtraData10')->nullable();
            $table->string('ckc_ExtraData11')->nullable();
            $table->string('ckc_ExtraData12')->nullable();
            $table->string('ckc_ExtraData13')->nullable();
            $table->string('ckc_ExtraData14')->nullable();
            $table->string('ckc_ExtraData15')->nullable();
            $table->string('ckc_ExtraData16')->nullable();
            $table->string('ckc_ExtraData17')->nullable();
            $table->string('ckc_ExtraData18')->nullable();
            $table->string('ckc_ExtraData19')->nullable();
            $table->string('ckc_ExtraData20')->nullable();
            $table->integer('ckc_AssociatedMsgSN')->nullable();
            $table->string('ckc_TimeZone', 10)->nullable();
            $table->string('ckc_mcommsystem', 6)->nullable();
            $table->string('ckc_mcommcity', 30)->nullable();
            $table->string('ckc_mcommcitystate', 6)->nullable();
            $table->integer('ckc_mcommsplc')->nullable();
            $table->string('ckc_mcommfence', 30)->nullable();
            $table->string('ckc_mcommfenceevent', 6)->nullable();
            $table->string('ckc_QCTTEvent', 8)->nullable();
            $table->string('ckc_subsistence_qualified', 1)->nullable();
            $table->smallInteger('ckc_miles_to_next')->nullable();
            $table->decimal('ckc_client_lat', 9, 6)->nullable();
            $table->decimal('ckc_client_long', 9, 6)->nullable();
            $table->integer('ckc_client_srid')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('checkcall');
    }
};
