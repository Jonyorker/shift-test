<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_list_lms_group_id
 * @property string $company_id
 * @property string $org_level_one
 * @property string $org_level_two
 * @property int $is_active
 * @property string $created_date
 * @property string $created_by
 * @property string $updated_date
 * @property string $updated_by
 * @property string $job_profile
 */
class UserListLmsPositionMapping extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Lms_Position_Mapping';

    protected $fillable = ['id', 'user_list_lms_group_id', 'company_id', 'org_level_one', 'org_level_two', 'is_active', 'created_date', 'created_by', 'updated_date', 'updated_by', 'job_profile'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
