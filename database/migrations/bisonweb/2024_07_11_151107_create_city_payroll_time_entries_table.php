<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('city_payroll_time_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->string('tractor_id', 50);
            $table->string('ip_address', 30);
            $table->dateTime('created_date');
            $table->dateTime('shift_date');
            $table->dateTime('start_hours');
            $table->dateTime('start_lunch_hours')->nullable();
            $table->dateTime('end_lunch_hours')->nullable();
            $table->dateTime('end_hours');
            $table->dateTime('total_hours_excluding_lunch');
            $table->tinyInteger('is_reviewed')->nullable();
            $table->string('reviewed_by', 10)->nullable();
            $table->dateTime('reviewed_date')->nullable();
            $table->string('fleet', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('city_payroll_time_entries');
    }
};
