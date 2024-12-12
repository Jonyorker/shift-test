<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('preliminary_incident_other_party', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('incident_id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('phone_number', 25);
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('postal', 25)->nullable();
            $table->string('city_other')->nullable();
            $table->string('province_other')->nullable();
            $table->string('license_number', 25)->nullable();
            $table->string('vehicle_license_plate', 25)->nullable();
            $table->string('vehicle_license_plate_prov', 25)->nullable();
            $table->string('vehicle_make', 25)->nullable();
            $table->string('vehicle_model', 25)->nullable();
            $table->string('vehicle_colour', 25)->nullable();
            $table->string('vehicle_year', 25)->nullable();
            $table->string('vehicle_owner', 100)->nullable();
            $table->string('vehicle_phone', 25)->nullable();
            $table->string('vehicle_phone_other', 25)->nullable();
            $table->string('vehicle_address')->nullable();
            $table->string('vehicle_city')->nullable();
            $table->string('vehicle_province')->nullable();
            $table->integer('vehicle_occupants')->nullable();
            $table->integer('vehicle_injuries')->nullable();
            $table->tinyInteger('vehicle_fatality')->nullable();
            $table->string('third_party_insurance', 100)->nullable();
            $table->string('policy_number', 20)->nullable();
            $table->string('insurance_address')->nullable();
            $table->string('insurance_city')->nullable();
            $table->string('insurance_province')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('preliminary_incident_other_party');
    }
};
