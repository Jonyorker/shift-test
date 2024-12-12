<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('incident_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_on');
            $table->dateTime('incident_date');
            $table->string('terminal', 100);
            $table->string('incident_type', 100)->nullable();
            $table->string('emp_id', 10);
            $table->string('job_title')->nullable();
            $table->string('job_experience')->nullable();
            $table->string('tenure')->nullable();
            $table->string('organization_code')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('has_injuries');
            $table->text('injuries_description')->nullable();
            $table->tinyInteger('wearing_ppe');
            $table->tinyInteger('completed_shift');
            $table->tinyInteger('received_first_aid');
            $table->text('first_aid_description')->nullable();
            $table->tinyInteger('doctor_visit_required');
            $table->tinyInteger('wcb_claim_opened');
            $table->tinyInteger('property_damage');
            $table->text('property_damage_description')->nullable();
            $table->tinyInteger('environment_damage');
            $table->text('environment_damage_description')->nullable();
            $table->text('witnesses')->nullable();
            $table->text('identify_cause')->nullable();
            $table->text('corrective_action')->nullable();
            $table->string('incident_severity', 100)->nullable();
            $table->string('incident_description')->nullable();
            $table->string('supervisor_emp_id', 10)->nullable();
            $table->dateTime('supervisor_approved_date')->nullable();
            $table->string('supervisor_approved_ip_address')->nullable();
            $table->string('safety_emp_id', 10)->nullable();
            $table->dateTime('safety_approved_date')->nullable();
            $table->string('safety_approved_ip_address')->nullable();
            $table->string('incident_location')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('incident_reports');
    }
};
