<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_list_id
 * @property int $user_list_identity_type_id
 * @property string $value
 * @property int $is_active
 * @property string $created_date
 * @property string $updated_date
 */
class UserListIdentity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Identity';

    protected $fillable = ['id', 'user_list_id', 'user_list_identity_type_id', 'value', 'is_active', 'created_date', 'updated_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
