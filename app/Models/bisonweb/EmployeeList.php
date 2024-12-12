<?php

namespace App\Models\bisonweb;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $employee_id
 * @property string $login_id
 * @property string $first_name
 * @property string $last_name
 * @property string $formatted_name
 * @property string $formatted_name_reversed
 * @property string $aka_name
 * @property string $org_level_one_name
 * @property string $org_level_one_code
 * @property string $org_level_two_name
 * @property string $org_level_two_code
 * @property string $org_level_three_name
 * @property string $org_level_three_code
 * @property string $organization_code
 * @property string $organization_name
 * @property string $job_title
 * @property string $job_code
 * @property string $shift
 * @property string $terminal
 * @property string $office_number
 * @property string $extension
 * @property string $home_number
 * @property string $cell_number
 * @property string $email_address
 * @property string $fleet
 * @property string $parking_tag
 * @property string $is_after_hours
 * @property string $out_of_office
 * @property string $hired_date
 * @property string $birth_date
 * @property string $status
 * @property string $termination_date
 * @property int $is_supervisor
 * @property string $supervisors
 * @property string $reports_to
 * @property string $directly_reports_to
 * @property string $touch_date
 * @property int $is_driver_supervisor
 * @property int $is_mechanic
 * @property int $is_warehouse
 * @property string $ldap_id
 * @property string $payroll_identifier
 */
class EmployeeList extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Employee_List';

    protected $fillable = ['employee_id', 'login_id', 'first_name', 'last_name', 'formatted_name', 'formatted_name_reversed', 'aka_name', 'org_level_one_name', 'org_level_one_code', 'org_level_two_name', 'org_level_two_code', 'org_level_three_name', 'org_level_three_code', 'organization_code', 'organization_name', 'job_title', 'job_code', 'shift', 'terminal', 'office_number', 'extension', 'home_number', 'cell_number', 'email_address', 'fleet', 'parking_tag', 'is_after_hours', 'out_of_office', 'hired_date', 'birth_date', 'status', 'termination_date', 'is_supervisor', 'supervisors', 'reports_to', 'directly_reports_to', 'touch_date', 'is_driver_supervisor', 'is_mechanic', 'is_warehouse', 'ldap_id', 'payroll_identifier'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
