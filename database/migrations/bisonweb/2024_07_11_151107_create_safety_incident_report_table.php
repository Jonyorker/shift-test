<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('safety_incident_report', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_date');
            $table->string('emp_id', 20)->nullable();
            $table->dateTime('incident_date')->nullable();
            $table->string('terminal')->nullable();
            $table->string('incident_type')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_experience')->nullable();
            $table->string('tenure')->nullable();
            $table->string('time_in_role')->nullable();
            $table->string('organization_code')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('has_injuries')->nullable();
            $table->text('injuries_description')->nullable();
            $table->tinyInteger('wearing_ppe')->nullable();
            $table->tinyInteger('completed_shift')->nullable();
            $table->tinyInteger('received_first_aid')->nullable();
            $table->text('first_aid_description')->nullable();
            $table->tinyInteger('doctor_visit_required')->nullable();
            $table->text('doctor_visit_description')->nullable();
            $table->tinyInteger('property_damage')->nullable();
            $table->text('property_damage_description')->nullable();
            $table->tinyInteger('environment_damage')->nullable();
            $table->text('environment_damage_description')->nullable();
            $table->text('witnesses')->nullable();
            $table->string('identify_cause')->nullable();
            $table->text('emp_identify_cause')->nullable();
            $table->text('emp_identify_cause_description')->nullable();
            $table->string('leader_emp_id', 30)->nullable();
            $table->dateTime('leader_approve_deny_date')->nullable();
            $table->dateTime('leader_corrective_action_date')->nullable();
            $table->string('leader_approved_ip_address')->nullable();
            $table->string('corrective_action')->nullable();
            $table->string('incident_severity')->nullable();
            $table->text('incident_description')->nullable();
            $table->string('safety_emp_id', 30)->nullable();
            $table->string('safety_approved_ip_address')->nullable();
            $table->string('incident_location')->nullable();
            $table->string('injury_type')->nullable();
            $table->tinyInteger('time_lost')->nullable();
            $table->string('mca')->nullable();
            $table->smallInteger('wcb_claim_opened')->nullable();
            $table->tinyInteger('restricted_or_modified')->nullable();
            $table->text('incident_assessment_comments')->nullable();
            $table->text('leader_progress_update')->nullable();
            $table->text('leader_comments')->nullable();
            $table->text('safety_update_leader_comments')->nullable();
            $table->text('safety_comments')->nullable();
            $table->text('leader_identify_cause_agree')->nullable();
            $table->text('leader_identify_cause_option')->nullable();
            $table->text('leader_identify_cause_description')->nullable();
            $table->tinyInteger('safety_identify_cause_agree')->nullable();
            $table->text('safety_identify_cause_option')->nullable();
            $table->text('safety_identify_cause_description')->nullable();
            $table->text('leader_corrective_action')->nullable();
            $table->text('leader_corrective_action_description')->nullable();
            $table->text('safety_corrective_action_agree')->nullable();
            $table->text('safety_corrective_action')->nullable();
            $table->text('safety_corrective_action_description')->nullable();
            $table->string('report_status')->nullable();
            $table->dateTime('updated_date')->nullable();
            $table->string('updated_by', 30)->nullable();
            $table->integer('incident_id')->nullable();
            $table->dateTime('safety_approve_deny_date')->nullable();
            $table->tinyInteger('recommended_corrective_action')->nullable();
            $table->text('recommended_corrective_action_description')->nullable();
            $table->tinyInteger('leader_approve_deny')->nullable();
            $table->tinyInteger('safety_approve_deny')->nullable();
            $table->tinyInteger('hoir_completed')->nullable();
            $table->string('investigator_details')->nullable();
            $table->dateTime('investigation_due_date')->nullable();
            $table->tinyInteger('investigation_completed')->nullable();
            $table->string('root_cause')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('safety_incident_report');
    }
};
