<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $created_on
 * @property string $incident_date
 * @property string $terminal
 * @property string $incident_type
 * @property string $emp_id
 * @property string $job_title
 * @property string $job_experience
 * @property string $tenure
 * @property string $organization_code
 * @property string $description
 * @property string $has_injuries
 * @property string $injuries_description
 * @property string $wearing_ppe
 * @property string $completed_shift
 * @property string $received_first_aid
 * @property string $first_aid_description
 * @property string $doctor_visit_required
 * @property string $wcb_claim_opened
 * @property string $property_damage
 * @property string $property_damage_description
 * @property string $environment_damage
 * @property string $environment_damage_description
 * @property string $witnesses
 * @property string $identify_cause
 * @property string $corrective_action
 * @property string $incident_severity
 * @property string $incident_description
 * @property string $supervisor_emp_id
 * @property string $supervisor_approved_date
 * @property string $supervisor_approved_ip_address
 * @property string $safety_emp_id
 * @property string $safety_approved_date
 * @property string $safety_approved_ip_address
 * @property string $incident_location
 * @property string $id
 */
class TestTable extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Test_Table';

    protected $fillable = ['created_on', 'incident_date', 'terminal', 'incident_type', 'emp_id', 'job_title', 'job_experience', 'tenure', 'organization_code', 'description', 'has_injuries', 'injuries_description', 'wearing_ppe', 'completed_shift', 'received_first_aid', 'first_aid_description', 'doctor_visit_required', 'wcb_claim_opened', 'property_damage', 'property_damage_description', 'environment_damage', 'environment_damage_description', 'witnesses', 'identify_cause', 'corrective_action', 'incident_severity', 'incident_description', 'supervisor_emp_id', 'supervisor_approved_date', 'supervisor_approved_ip_address', 'safety_emp_id', 'safety_approved_date', 'safety_approved_ip_address', 'incident_location', 'id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
