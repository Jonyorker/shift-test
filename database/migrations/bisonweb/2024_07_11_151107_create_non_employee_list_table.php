<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('non_employee_list', function (Blueprint $table) {
            $table->string('employee_id', 50)->primary();
            $table->string('login_id', 10)->nullable();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('formatted_name')->nullable();
            $table->string('formatted_name_reversed')->nullable();
            $table->string('aka_name')->nullable();
            $table->string('org_level_one_name')->nullable();
            $table->string('org_level_one_code')->nullable();
            $table->string('org_level_two_name')->nullable();
            $table->string('org_level_two_code')->nullable();
            $table->string('org_level_three_name')->nullable();
            $table->string('org_level_three_code')->nullable();
            $table->string('organization_code')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_code')->nullable();
            $table->string('shift')->nullable();
            $table->string('terminal')->nullable();
            $table->string('office_number', 1)->nullable();
            $table->string('cell_number', 20)->nullable();
            $table->string('email_address')->nullable();
            $table->string('status');
            $table->dateTime('hired_date');
            $table->dateTime('termination_date')->nullable();
            $table->dateTime('birth_date')->nullable();
            $table->string('non_employee_type', 50);
            $table->dateTime('last_update_date');
            $table->string('fleet', 4)->nullable();

            $table->unique(['employee_id'], 'ux_nonempid');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('non_employee_list');
    }
};
