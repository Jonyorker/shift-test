<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $smarteru_lms_id
 * @property string $group_id
 * @property string $group_name
 * @property int $is_active
 * @property string $created_date
 * @property string $updated_date
 */
class UserListLmsGroups extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Lms_Groups';

    protected $fillable = ['id', 'smarteru_lms_id', 'group_id', 'group_name', 'is_active', 'created_date', 'updated_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
