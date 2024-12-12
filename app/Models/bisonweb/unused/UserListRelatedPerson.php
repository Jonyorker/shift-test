<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_list_id
 * @property int $workday_id
 * @property string $first_name
 * @property string $last_name
 * @property int $is_active
 * @property string $relationship_id
 * @property string $created_date
 * @property string $updated_date
 * @property string $relationship_type
 */
class UserListRelatedPerson extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Related_Person';

    protected $fillable = ['id', 'user_list_id', 'workday_id', 'first_name', 'last_name', 'is_active', 'relationship_id', 'created_date', 'updated_date', 'relationship_type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
