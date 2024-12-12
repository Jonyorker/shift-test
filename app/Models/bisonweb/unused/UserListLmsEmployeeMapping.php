<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_list_id
 * @property int $user_list_lms_group_id
 * @property int $is_active
 * @property int $is_autoassigned
 * @property string $created_date
 * @property string $created_by
 * @property string $updated_date
 * @property string $updated_by
 */
class UserListLmsEmployeeMapping extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Lms_Employee_Mapping';

    protected $fillable = ['id', 'user_list_id', 'user_list_lms_group_id', 'is_active', 'is_autoassigned', 'created_date', 'created_by', 'updated_date', 'updated_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
