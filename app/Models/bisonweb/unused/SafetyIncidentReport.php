<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_date
 * @property string $emp_id
 * @property string $incident_date
 * @property string $terminal
 * @property string $incident_type
 * @property string $job_title
 * @property string $job_experience
 * @property string $tenure
 * @property string $time_in_role
 * @property string $organization_code
 * @property string $description
 * @property int $has_injuries
 * @property string $injuries_description
 * @property int $wearing_ppe
 * @property int $completed_shift
 * @property int $received_first_aid
 * @property string $first_aid_description
 * @property int $doctor_visit_required
 * @property string $doctor_visit_description
 * @property int $property_damage
 * @property string $property_damage_description
 * @property int $environment_damage
 * @property string $environment_damage_description
 * @property string $witnesses
 * @property string $identify_cause
 * @property string $emp_identify_cause
 * @property string $emp_identify_cause_description
 * @property string $leader_emp_id
 * @property string $leader_approve_deny_date
 * @property string $leader_corrective_action_date
 * @property string $leader_approved_ip_address
 * @property string $corrective_action
 * @property string $incident_severity
 * @property string $incident_description
 * @property string $safety_emp_id
 * @property string $safety_approved_ip_address
 * @property string $incident_location
 * @property string $injury_type
 * @property int $time_lost
 * @property string $mca
 * @property int $wcb_claim_opened
 * @property int $restricted_or_modified
 * @property string $incident_assessment_comments
 * @property string $leader_progress_update
 * @property string $leader_comments
 * @property string $safety_update_leader_comments
 * @property string $safety_comments
 * @property string $leader_identify_cause_agree
 * @property string $leader_identify_cause_option
 * @property string $leader_identify_cause_description
 * @property int $safety_identify_cause_agree
 * @property string $safety_identify_cause_option
 * @property string $safety_identify_cause_description
 * @property string $leader_corrective_action
 * @property string $leader_corrective_action_description
 * @property string $safety_corrective_action_agree
 * @property string $safety_corrective_action
 * @property string $safety_corrective_action_description
 * @property string $report_status
 * @property string $updated_date
 * @property string $updated_by
 * @property int $incident_id
 * @property string $safety_approve_deny_date
 * @property int $recommended_corrective_action
 * @property string $recommended_corrective_action_description
 * @property int $leader_approve_deny
 * @property int $safety_approve_deny
 * @property int $hoir_completed
 * @property string $investigator_details
 * @property string $investigation_due_date
 * @property int $investigation_completed
 * @property string $root_cause
 */
class SafetyIncidentReport extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Safety_Incident_Report';

    protected $fillable = ['id', 'created_date', 'emp_id', 'incident_date', 'terminal', 'incident_type', 'job_title', 'job_experience', 'tenure', 'time_in_role', 'organization_code', 'description', 'has_injuries', 'injuries_description', 'wearing_ppe', 'completed_shift', 'received_first_aid', 'first_aid_description', 'doctor_visit_required', 'doctor_visit_description', 'property_damage', 'property_damage_description', 'environment_damage', 'environment_damage_description', 'witnesses', 'identify_cause', 'emp_identify_cause', 'emp_identify_cause_description', 'leader_emp_id', 'leader_approve_deny_date', 'leader_corrective_action_date', 'leader_approved_ip_address', 'corrective_action', 'incident_severity', 'incident_description', 'safety_emp_id', 'safety_approved_ip_address', 'incident_location', 'injury_type', 'time_lost', 'mca', 'wcb_claim_opened', 'restricted_or_modified', 'incident_assessment_comments', 'leader_progress_update', 'leader_comments', 'safety_update_leader_comments', 'safety_comments', 'leader_identify_cause_agree', 'leader_identify_cause_option', 'leader_identify_cause_description', 'safety_identify_cause_agree', 'safety_identify_cause_option', 'safety_identify_cause_description', 'leader_corrective_action', 'leader_corrective_action_description', 'safety_corrective_action_agree', 'safety_corrective_action', 'safety_corrective_action_description', 'report_status', 'updated_date', 'updated_by', 'incident_id', 'safety_approve_deny_date', 'recommended_corrective_action', 'recommended_corrective_action_description', 'leader_approve_deny', 'safety_approve_deny', 'hoir_completed', 'investigator_details', 'investigation_due_date', 'investigation_completed', 'root_cause'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
