<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_trailerposition_carrier_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_id', 20);
            $table->dateTime('created_date');
            $table->string('mtsn', 20)->nullable();
            $table->string('asset_id', 100)->nullable();
            $table->string('asset_type', 20)->nullable();
            $table->decimal('latitude', 10, 6)->nullable();
            $table->decimal('longitude', 10, 6)->nullable();
            $table->decimal('speed_mph', 9, 3)->nullable();
            $table->decimal('speed_kph', 9, 3)->nullable();
            $table->string('heading', 2)->nullable();
            $table->string('heading_in_degrees', 20)->nullable();
            $table->decimal('journey_distance_mi', 9)->nullable();
            $table->decimal('journey_distance_km', 9)->nullable();
            $table->dateTime('event_time')->nullable();
            $table->dateTime('event_time_cst');
            $table->string('geo_name')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country', 3)->nullable();
            $table->decimal('distance_from_city_mi', 9)->nullable();
            $table->decimal('distance_from_city_km', 9)->nullable();
            $table->string('direction_from_city', 5)->nullable();
            $table->string('postal_code', 2)->nullable();
            $table->decimal('idle_duration_days', 9)->nullable();
            $table->string('status', 10)->nullable();
            $table->string('feed_source', 100);
            $table->string('bison_geo_description')->nullable();
            $table->string('bison_geofence_cmpid', 8)->nullable();
            $table->string('bison_trlid', 15)->nullable();
            $table->tinyInteger('is_device_communicating');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_trailerposition_carrier_details');
    }
};
