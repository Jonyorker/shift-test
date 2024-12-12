<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $huddle_project_id
 * @property string $emp_id
 * @property int $huddle_resource_user_type_id
 */
class HuddleUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Huddle_User';

    protected $fillable = ['id', 'huddle_project_id', 'emp_id', 'huddle_resource_user_type_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
