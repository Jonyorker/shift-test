<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('MaintenanceSurvey', function (Blueprint $table) {
            $table->increments('RecordID');
            $table->string('DriverType', 50)->nullable();
            $table->integer('DrivingYears')->nullable();
            $table->integer('BisonYears')->nullable();
            $table->string('Region', 10)->nullable();
            $table->string('DrivingPosition', 50)->nullable();
            $table->string('Name', 50)->nullable();
            $table->string('DriverID', 6)->nullable();
            $table->string('FleetNumber', 10)->nullable();
            $table->integer('Sec11a')->nullable();
            $table->integer('Sec11b')->nullable();
            $table->integer('Sec11c')->nullable();
            $table->integer('Sec11d')->nullable();
            $table->integer('Sec11e')->nullable();
            $table->integer('Sec12')->nullable();
            $table->text('Sec13')->nullable();
            $table->integer('Sec21a')->nullable();
            $table->integer('Sec21b')->nullable();
            $table->integer('Sec21c')->nullable();
            $table->integer('Sec21d')->nullable();
            $table->integer('Sec21e')->nullable();
            $table->text('Sec21ewhy')->nullable();
            $table->integer('Sec21f')->nullable();
            $table->text('Sec22')->nullable();
            $table->string('Sec3aMake', 50)->nullable();
            $table->string('Sec3aModel', 50)->nullable();
            $table->string('Sec3aYear', 4)->nullable();
            $table->integer('Sec3b')->nullable();
            $table->text('Sec3c')->nullable();
            $table->text('Sec3d')->nullable();
            $table->integer('Sec3e')->nullable();
            $table->text('Sec3f')->nullable();
            $table->integer('Sec4a')->nullable();
            $table->text('Sec4b')->nullable();
            $table->text('Sec4c')->nullable();
            $table->integer('Sec5a')->nullable();
            $table->integer('Sec5b')->nullable();
            $table->text('Sec5c')->nullable();
            $table->text('Sec5d')->nullable();
            $table->integer('Sec21')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('MaintenanceSurvey');
    }
};
