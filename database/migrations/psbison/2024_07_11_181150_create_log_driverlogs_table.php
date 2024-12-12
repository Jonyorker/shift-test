<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('log_driverlogs', function (Blueprint $table) {
            $table->string('mpp_id', 10)->nullable();
            $table->dateTime('log_date');
            $table->smallInteger('total_miles');
            $table->string('log', 96)->nullable();
            $table->float('off_duty_hrs', 53, 0);
            $table->float('sleeper_berth_hrs', 53, 0);
            $table->float('driving_hrs', 53, 0)->nullable();
            $table->float('on_duty_hrs', 53, 0);
            $table->string('processed_flag', 1)->nullable();
            $table->dateTime('log_reset')->nullable();
            $table->tinyInteger('log_resetkind')->nullable();
            $table->string('rule_reset_indc', 1)->nullable();
            $table->float('eleven_hr_rule', 53, 0)->nullable();
            $table->float('fourteen_hr_rule', 53, 0)->nullable();
            $table->float('sixty_seventy_hr_rule', 53, 0)->nullable();
            $table->dateTime('last_avail_hrs_recalc')->nullable();
            $table->dateTime('rule_reset_date')->nullable();
            $table->dateTime('rule_est_reset_date')->nullable();
            $table->increments('log_driverlog_ID');
            $table->boolean('skip_trigger')->nullable();
            $table->dateTime('INS_TIMESTAMP');
            $table->string('DW_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('log_driverlogs');
    }
};
