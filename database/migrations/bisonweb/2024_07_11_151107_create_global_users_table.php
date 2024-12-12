<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('global_users', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_date');
            $table->dateTime('last_updated_date')->nullable();
            $table->dateTime('hired_date')->nullable();
            $table->dateTime('termination_date')->nullable();
            $table->integer('workday_id')->nullable()->index('workday_id');
            $table->string('driver_id', 10)->nullable()->index('driver_id');
            $table->string('login_id', 50)->nullable();
            $table->string('ldap_id')->nullable();
            $table->string('company_id')->nullable();
            $table->string('first_name')->index('first_name');
            $table->string('last_name')->index('last_name');
            $table->string('formatted_name')->nullable();
            $table->string('reporting_name')->nullable();
            $table->string('preferred_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('status')->nullable();
            $table->string('terminal', 50)->nullable()->index('terminal');
            $table->string('fleet')->nullable();
            $table->string('office_number')->nullable()->index('office_number');
            $table->string('extension')->nullable();
            $table->string('home_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email_address')->nullable()->index('email');
            $table->string('is_after_hours');
            $table->dateTime('out_of_office')->nullable();
            $table->tinyInteger('is_supervisor');
            $table->tinyInteger('is_driver_supervisor');
            $table->tinyInteger('is_mechanic');
            $table->tinyInteger('is_warehouse');
            $table->tinyInteger('is_driver');
            $table->string('payroll_identifier', 20)->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('global_users');
    }
};
