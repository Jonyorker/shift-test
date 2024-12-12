<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('scorecard_utilization_driver', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->dateTime('created_date');
            $table->string('type1', 10)->nullable();
            $table->string('type2', 10)->nullable();
            $table->string('type3', 10)->nullable();
            $table->string('fleet', 10)->nullable();
            $table->string('division', 20)->nullable();
            $table->string('date_range', 50)->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->float('miles', 53, 0)->nullable();
            $table->float('miles_us', 53, 0)->nullable();
            $table->float('miles_lcv', 53, 0)->nullable();
            $table->float('est_working_day', 53, 0)->nullable();
            $table->float('driving_hrs', 53, 0)->nullable();
            $table->float('log_hrs_per_day', 53, 0)->nullable();
            $table->float('pickup_drop', 53, 0)->nullable();
            $table->float('gross_pay', 53, 0)->nullable();
            $table->float('operating_pay', 53, 0)->nullable();
            $table->float('top_avg_miles', 53, 0)->nullable();
            $table->float('top_avg_miles_us', 53, 0)->nullable();
            $table->float('top_avg_miles_lcv', 53, 0)->nullable();
            $table->float('top_avg_est_working_day', 53, 0)->nullable();
            $table->float('top_avg_log_hrs_per_day', 53, 0)->nullable();
            $table->float('top_avg_pickup_drop', 53, 0)->nullable();
            $table->float('top_avg_operating_pay', 53, 0)->nullable();
            $table->float('gross_pay_hr', 53, 0)->nullable();
            $table->float('us', 53, 0)->nullable();
            $table->float('lcv', 53, 0)->nullable();
            $table->float('operating_pay_hr', 53, 0)->nullable();
            $table->float('avg_miles_by_fleet', 53, 0)->nullable();
            $table->float('avg_us_by_fleet', 53, 0)->nullable();
            $table->float('avg_lcv_by_fleet', 53, 0)->nullable();
            $table->float('avg_est_working_day_by_fleet', 53, 0)->nullable();
            $table->float('avg_log_hrs_per_day_by_fleet', 53, 0)->nullable();
            $table->float('avg_pickup_drop_by_fleet', 53, 0)->nullable();
            $table->float('avg_operating_pay_by_fleet', 53, 0)->nullable();
            $table->string('region', 20)->nullable();
            $table->float('avg_miles_by_region', 53, 0)->nullable();
            $table->float('avg_us_by_region', 53, 0)->nullable();
            $table->float('avg_lcv_by_region', 53, 0)->nullable();
            $table->float('avg_est_working_day_by_region', 53, 0)->nullable();
            $table->float('avg_log_hrs_per_day_by_region', 53, 0)->nullable();
            $table->float('avg_pickup_drop_by_region', 53, 0)->nullable();
            $table->float('avg_operating_pay_by_region', 53, 0)->nullable();
            $table->float('top_avg_operating_pay_hr', 53, 0)->nullable();
            $table->float('avg_operating_pay_hr_by_fleet', 53, 0)->nullable();
            $table->float('avg_operating_pay_hr_by_region', 53, 0)->nullable();

            $table->index(['start_date', 'date_range', 'emp_id'], 'ix_scorecard_utilization_driver_start_date');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('scorecard_utilization_driver');
    }
};
