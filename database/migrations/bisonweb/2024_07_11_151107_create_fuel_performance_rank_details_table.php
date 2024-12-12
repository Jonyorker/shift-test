<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('fuel_performance_rank_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id', 10)->nullable()->index('fuel_employees');
            $table->string('time_frame', 10)->nullable()->index('fuel_timeframe');
            $table->dateTime('created_date')->nullable();
            $table->string('fleet', 10)->nullable();
            $table->string('region', 50)->nullable();
            $table->integer('engine_time')->nullable();
            $table->integer('miles')->nullable();
            $table->decimal('mpg', 38, 5)->nullable();
            $table->decimal('short_idle', 38, 5)->nullable();
            $table->decimal('extended_idle', 38, 5)->nullable();
            $table->decimal('over_rpm', 38, 5)->nullable();
            $table->decimal('cruise', 38, 5)->nullable();
            $table->decimal('extra_cpl', 38, 5)->nullable();
            $table->decimal('fleet_avg_extra_cpl', 38, 5)->nullable();
            $table->decimal('region_avg_extra_cpl', 38, 5)->nullable();
            $table->integer('fleet_rank_mpg')->nullable();
            $table->integer('fleet_rank_short_idle')->nullable();
            $table->integer('fleet_rank_extended_idle')->nullable();
            $table->integer('fleet_rank_over_rpm')->nullable();
            $table->integer('fleet_rank_cruise')->nullable();
            $table->integer('fleet_rank_extra_cpl')->nullable();
            $table->decimal('fleet_weighted_score', 10, 5)->nullable();
            $table->integer('fleet_final_rank')->nullable()->index('fuel_fleet_rank');
            $table->integer('region_rank_mpg')->nullable();
            $table->integer('region_rank_short_idle')->nullable();
            $table->integer('region_rank_extended_idle')->nullable();
            $table->integer('region_rank_over_rpm')->nullable();
            $table->integer('region_rank_cruise')->nullable();
            $table->integer('region_rank_extra_cpl')->nullable();
            $table->decimal('region_weighted_score', 10, 5)->nullable();
            $table->integer('region_final_rank')->nullable()->index('fuel_region_rank');
            $table->string('driver_type', 10)->nullable();

            $table->unique(['employee_id', 'time_frame'], 'timeframe_employees');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('fuel_performance_rank_details');
    }
};
