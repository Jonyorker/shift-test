<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_utilization_mpp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mpp_id', 8)->nullable();
            $table->string('trc_number', 8)->nullable();
            $table->integer('mpp_last30miles')->nullable();
            $table->integer('mpp_last30trips')->nullable();
            $table->integer('mpp_miles1')->nullable();
            $table->integer('mpp_miles2')->nullable();
            $table->integer('mpp_miles3')->nullable();
            $table->integer('mpp_miles4')->nullable();
            $table->integer('mpp_miles5')->nullable();
            $table->integer('mpp_miles6')->nullable();
            $table->integer('mpp_last30milesrank')->nullable();
            $table->integer('mpp_miles6rank')->nullable();
            $table->dateTime('daterun')->nullable();
            $table->dateTime('mpp_startdate')->nullable();
            $table->integer('mpp_med30')->nullable();
            $table->integer('mpp_med180')->nullable();
            $table->string('mpp_fleet', 8)->nullable();
            $table->integer('mpp_m1')->nullable();
            $table->integer('mpp_m2')->nullable();
            $table->integer('mpp_m3')->nullable();
            $table->integer('mpp_m4')->nullable();
            $table->integer('mpp_m5')->nullable();
            $table->integer('mpp_m6')->nullable();
            $table->integer('mpp_m7')->nullable();
            $table->integer('mpp_m8')->nullable();
            $table->integer('mpp_m9')->nullable();
            $table->integer('mpp_m10')->nullable();
            $table->integer('mpp_m11')->nullable();
            $table->integer('mpp_m12')->nullable();
            $table->integer('mpp_MTD_status')->nullable();
            $table->integer('mpp_drops6m')->nullable();
            $table->integer('mpp_latedrop6m')->nullable();
            $table->integer('mpp_us1')->nullable();
            $table->integer('mpp_us2')->nullable();
            $table->integer('mpp_us3')->nullable();
            $table->integer('mpp_us4')->nullable();
            $table->integer('mpp_us5')->nullable();
            $table->integer('mpp_us6')->nullable();
            $table->integer('mpp_drops1y')->nullable();
            $table->integer('mpp_latedrops1y')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_utilization_mpp');
    }
};
