<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_list_company_id
 * @property int $is_primary
 * @property string $start_date
 * @property string $end_date
 * @property string $terminal
 * @property string $org_level_one
 * @property string $org_level_two
 * @property string $job_title
 * @property string $reports_to
 * @property string $fleet
 * @property int $is_supervisor
 * @property int $is_driver_supervisor
 * @property int $is_mechanic
 * @property int $is_warehouse
 * @property int $is_driver
 * @property string $created_date
 * @property string $updated_date
 * @property string $pay_identifier
 * @property string $time_type
 * @property string $job_profile
 */
class UserListPosition extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Position';

    protected $fillable = ['id', 'user_list_company_id', 'is_primary', 'start_date', 'end_date', 'terminal', 'org_level_one', 'org_level_two', 'job_title', 'reports_to', 'fleet', 'is_supervisor', 'is_driver_supervisor', 'is_mechanic', 'is_warehouse', 'is_driver', 'created_date', 'updated_date', 'pay_identifier', 'time_type', 'job_profile'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
