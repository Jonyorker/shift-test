<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_critical_incidents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_id', 100);
            $table->string('driver_id', 100)->nullable();
            $table->dateTime('incident_time')->nullable();
            $table->string('message_location')->nullable();
            $table->string('trigger_event')->nullable();
            $table->string('trigger_data')->nullable();
            $table->decimal('incident_speed', 8, 3)->nullable();
            $table->dateTime('time_added')->nullable();
            $table->string('transaction_id', 100)->nullable();
            $table->integer('source_id')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_critical_incidents');
    }
};
