<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('employee_list', function (Blueprint $table) {
            $table->string('employee_id', 10)->unique('employee_id');
            $table->string('login_id', 50)->nullable();
            $table->string('first_name')->index('first_name');
            $table->string('last_name')->index('last_name');
            $table->string('formatted_name')->nullable();
            $table->string('formatted_name_reversed')->nullable();
            $table->string('aka_name')->nullable();
            $table->string('org_level_one_name');
            $table->string('org_level_one_code');
            $table->string('org_level_two_name');
            $table->string('org_level_two_code');
            $table->string('org_level_three_name');
            $table->string('org_level_three_code');
            $table->string('organization_code')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_code')->nullable();
            $table->string('shift', 20)->nullable();
            $table->string('terminal', 50)->nullable()->index('terminal');
            $table->string('office_number')->nullable()->index('office_number');
            $table->string('extension')->nullable();
            $table->string('home_number')->nullable();
            $table->string('cell_number')->nullable();
            $table->string('email_address')->nullable();
            $table->string('fleet')->nullable();
            $table->string('parking_tag')->nullable();
            $table->string('is_after_hours')->nullable();
            $table->dateTime('out_of_office')->nullable();
            $table->dateTime('hired_date')->nullable();
            $table->dateTime('birth_date')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('termination_date')->nullable();
            $table->tinyInteger('is_supervisor');
            $table->string('supervisors')->nullable();
            $table->string('reports_to')->nullable();
            $table->string('directly_reports_to')->nullable();
            $table->dateTime('touch_date');
            $table->tinyInteger('is_driver_supervisor');
            $table->tinyInteger('is_mechanic');
            $table->tinyInteger('is_warehouse');
            $table->string('ldap_id')->nullable();
            $table->string('payroll_identifier', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('employee_list');
    }
};
