<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('preliminary_incident_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10)->nullable();
            $table->dateTime('created_on');
            $table->dateTime('modified_date')->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->dateTime('accident_date')->nullable();
            $table->string('accident_tractor')->nullable();
            $table->string('accident_trailer')->nullable();
            $table->string('accident_location')->nullable();
            $table->string('accident_city')->nullable();
            $table->string('accident_province')->nullable();
            $table->string('accident_driver_injury')->nullable();
            $table->tinyInteger('accident_citation_issued')->nullable();
            $table->tinyInteger('accident_cargo_damage')->nullable();
            $table->string('police_name', 100)->nullable();
            $table->string('detachment')->nullable();
            $table->string('police_phone', 25)->nullable();
            $table->string('cruiser_number', 20)->nullable();
            $table->string('badge_number', 20)->nullable();
            $table->string('collision_report_number', 20)->nullable();
            $table->string('accident_roadcond', 100)->nullable();
            $table->string('accident_weathercond', 100)->nullable();
            $table->string('accident_traffic', 100)->nullable();
            $table->string('accident_light', 100)->nullable();
            $table->string('accident_otherone', 100)->nullable();
            $table->integer('accident_travelling_speed')->nullable();
            $table->string('travelling_speed', 100)->nullable();
            $table->integer('accident_posted_speed')->nullable();
            $table->string('posted_speed', 100)->nullable();
            $table->tinyInteger('accident_cruise')->nullable();
            $table->string('damage_truck')->nullable();
            $table->string('damage_trailerOne')->nullable();
            $table->string('damage_trailerTwo')->nullable();
            $table->string('damage_bison_property')->nullable();
            $table->string('damage_other_property')->nullable();
            $table->text('damage_driver_statement')->nullable();
            $table->string('claim_incident_number', 20)->nullable();
            $table->string('comment')->nullable();
            $table->string('commented_by', 10)->nullable();
            $table->dateTime('commented_date')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('preliminary_incident_reports');
    }
};
