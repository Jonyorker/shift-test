<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_date
 * @property string $last_updated_date
 * @property string $hired_date
 * @property string $termination_date
 * @property int $workday_id
 * @property string $driver_id
 * @property string $login_id
 * @property string $ldap_id
 * @property string $company_id
 * @property string $first_name
 * @property string $last_name
 * @property string $formatted_name
 * @property string $reporting_name
 * @property string $preferred_name
 * @property string $job_title
 * @property string $status
 * @property string $terminal
 * @property string $fleet
 * @property string $office_number
 * @property string $extension
 * @property string $home_number
 * @property string $mobile_number
 * @property string $email_address
 * @property string $is_after_hours
 * @property string $out_of_office
 * @property int $is_supervisor
 * @property int $is_driver_supervisor
 * @property int $is_mechanic
 * @property int $is_warehouse
 * @property int $is_driver
 * @property string $payroll_identifier
 */
class GlobalUsers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Global_Users';

    protected $fillable = ['id', 'created_date', 'last_updated_date', 'hired_date', 'termination_date', 'workday_id', 'driver_id', 'login_id', 'ldap_id', 'company_id', 'first_name', 'last_name', 'formatted_name', 'reporting_name', 'preferred_name', 'job_title', 'status', 'terminal', 'fleet', 'office_number', 'extension', 'home_number', 'mobile_number', 'email_address', 'is_after_hours', 'out_of_office', 'is_supervisor', 'is_driver_supervisor', 'is_mechanic', 'is_warehouse', 'is_driver', 'payroll_identifier'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
