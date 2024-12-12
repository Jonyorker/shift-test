<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('employee_performance_review_dates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10)->unique('sys_emp_id');
            $table->dateTime('probation_late')->nullable();
            $table->dateTime('interim_late')->nullable();
            $table->dateTime('annual_late')->nullable();
            $table->dateTime('idp_late')->nullable();
            $table->dateTime('idp_interim_late')->nullable();
            $table->dateTime('interim_next')->nullable();
            $table->dateTime('annual_next')->nullable();
            $table->dateTime('idp_next')->nullable();
            $table->dateTime('idp_interim_next')->nullable();
            $table->dateTime('probation_next')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('employee_performance_review_dates');
    }
};
