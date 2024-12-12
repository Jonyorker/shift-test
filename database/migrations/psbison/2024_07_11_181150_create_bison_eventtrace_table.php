<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_eventtrace', function (Blueprint $table) {
            $table->string('et_type', 1)->nullable();
            $table->increments('et_id');
            $table->integer('stp_number')->nullable();
            $table->integer('evt_number')->nullable();
            $table->integer('evt_mov_number')->nullable();
            $table->string('evt_eventcode', 6)->nullable();
            $table->dateTime('evt_startdate')->nullable();
            $table->dateTime('evt_enddate')->nullable();
            $table->string('evt_status', 6)->nullable();
            $table->string('evt_driver1', 8)->nullable();
            $table->string('evt_tractor', 8)->nullable();
            $table->string('evt_trailer1', 13)->nullable();
            $table->string('evt_eventcode_old', 6)->nullable();
            $table->dateTime('evt_startdate_old')->nullable();
            $table->dateTime('evt_enddate_old')->nullable();
            $table->string('evt_status_old', 6)->nullable();
            $table->string('evt_driver1_old', 8)->nullable();
            $table->string('evt_tractor_old', 8)->nullable();
            $table->string('evt_trailer1_old', 13)->nullable();
            $table->string('et_changeby', 50)->nullable();
            $table->dateTime('et_changedate')->nullable();
            $table->string('evt_carrier', 8)->nullable();
            $table->string('evt_carrier_old', 8)->nullable();
            $table->string('evt_trailer2', 13)->nullable();
            $table->string('evt_trailer2_old', 13)->nullable();
            $table->string('evt_dolly', 13)->nullable();
            $table->string('evt_dolly_old', 13)->nullable();
            $table->string('evt_departure_status', 6)->nullable();
            $table->string('evt_departure_status_old', 6)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_eventtrace');
    }
};
