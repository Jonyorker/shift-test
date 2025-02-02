<?php

namespace App\Models\bisonweb\unused;

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
 * @property string $cell_number
 * @property string $email_address
 * @property string $status
 * @property string $hired_date
 * @property string $termination_date
 * @property string $birth_date
 * @property string $non_employee_type
 * @property string $last_update_date
 * @property string $fleet
 */
class NonEmployeeList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Non_Employee_List';

    protected $fillable = ['employee_id', 'login_id', 'first_name', 'last_name', 'formatted_name', 'formatted_name_reversed', 'aka_name', 'org_level_one_name', 'org_level_one_code', 'org_level_two_name', 'org_level_two_code', 'org_level_three_name', 'org_level_three_code', 'organization_code', 'organization_name', 'job_title', 'job_code', 'shift', 'terminal', 'office_number', 'cell_number', 'email_address', 'status', 'hired_date', 'termination_date', 'birth_date', 'non_employee_type', 'last_update_date', 'fleet'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
