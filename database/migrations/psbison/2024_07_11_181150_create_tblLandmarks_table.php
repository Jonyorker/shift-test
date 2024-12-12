<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('tblLandmarks', function (Blueprint $table) {
            $table->increments('SN');
            $table->smallInteger('LatGrid')->nullable();
            $table->smallInteger('LongGrid')->nullable();
            $table->integer('SPLC')->nullable();
            $table->string('PopulationCode', 4)->nullable();
            $table->string('EnglishCityName', 18)->nullable();
            $table->string('State', 6)->nullable();
            $table->float('LatDegrees', 53, 0)->nullable();
            $table->float('LongDegrees', 53, 0)->nullable();
            $table->string('ts')->nullable();
            $table->geometry('landmarkpoint')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('tblLandmarks');
    }
};
