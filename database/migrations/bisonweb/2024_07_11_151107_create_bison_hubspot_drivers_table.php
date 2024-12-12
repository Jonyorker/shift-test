<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('bison_hubspot_drivers', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('hubspot_id')->nullable();
            $table->integer('hubspotprofile_id')->nullable();
            $table->dateTime('create_date')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('country', 20)->nullable();
            $table->string('province', 20)->nullable();
            $table->string('canadian_license', 6)->nullable();
            $table->string('driving_school', 6)->nullable();
            $table->string('experience', 50)->nullable();
            $table->string('driver_position', 20)->nullable();
            $table->string('driver_type', 20)->nullable();
            $table->string('class5_1year', 6)->nullable();
            $table->string('drive_in_US', 6)->nullable();
            $table->string('driver_preference', 50)->nullable();
            $table->string('documentation', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('bison_hubspot_drivers');
    }
};
