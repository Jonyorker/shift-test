<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('pay_information_lookup_new', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10)->nullable()->index('dk_emp_id');
            $table->string('unit_number', 15)->nullable()->index('dk_unit_number');
            $table->dateTime('pay_date')->nullable();
            $table->dateTime('cutoff_date')->nullable();
            $table->float('net_amount', 53, 0)->nullable();
            $table->string('pay_batch_num', 50)->nullable()->index('dk_pay_batch');
            $table->string('hourly_type', 50)->nullable();
            $table->dateTime('hourly_start_date')->nullable();
            $table->dateTime('hourly_end_date')->nullable();
            $table->float('hourly_net_amount', 53, 0)->nullable();
            $table->string('hourly_batch_num', 50)->nullable()->index('dk_hourly_batch');
            $table->integer('settlement_sheets_id')->nullable()->index('dk_settleid');
            $table->integer('has_fuel_subsidy')->nullable();
            $table->tinyInteger('has_fuel_statement')->nullable();
            $table->tinyInteger('has_personal_fuel_statement')->nullable();
            $table->string('pay_identifier')->nullable();
            $table->dateTime('last_pay_date')->nullable();
            $table->dateTime('pay_period_start')->nullable();
            $table->dateTime('pay_period_end')->nullable();
            $table->string('database_name', 10)->nullable();
            $table->float('gross_amount', 53, 0)->nullable();

            $table->unique(['emp_id', 'unit_number', 'pay_date', 'pay_batch_num'], 'uniq_employee');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('pay_information_lookup_new');
    }
};
