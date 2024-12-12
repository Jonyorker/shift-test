<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('test_table', function (Blueprint $table) {
            $table->string('created_on', 1);
            $table->string('incident_date', 1);
            $table->string('terminal', 100);
            $table->string('incident_type', 100)->nullable();
            $table->string('emp_id', 10);
            $table->string('job_title')->nullable();
            $table->string('job_experience')->nullable();
            $table->string('tenure')->nullable();
            $table->string('organization_code')->nullable();
            $table->text('description')->nullable();
            $table->string('has_injuries', 1);
            $table->text('injuries_description')->nullable();
            $table->string('wearing_ppe', 1);
            $table->string('completed_shift', 1);
            $table->string('received_first_aid', 1);
            $table->text('first_aid_description')->nullable();
            $table->string('doctor_visit_required', 1);
            $table->string('wcb_claim_opened', 1);
            $table->string('property_damage', 1);
            $table->text('property_damage_description')->nullable();
            $table->string('environment_damage', 1);
            $table->text('environment_damage_description')->nullable();
            $table->text('witnesses')->nullable();
            $table->text('identify_cause')->nullable();
            $table->text('corrective_action')->nullable();
            $table->string('incident_severity', 100)->nullable();
            $table->string('incident_description')->nullable();
            $table->string('supervisor_emp_id', 10)->nullable();
            $table->string('supervisor_approved_date', 1)->nullable();
            $table->string('supervisor_approved_ip_address')->nullable();
            $table->string('safety_emp_id', 10)->nullable();
            $table->string('safety_approved_date', 1)->nullable();
            $table->string('safety_approved_ip_address')->nullable();
            $table->string('incident_location')->nullable();
            $table->string('id', 1)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('test_table');
    }
};
