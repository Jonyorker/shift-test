<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_list_related_person_id
 * @property string $type
 * @property int $is_primary
 * @property int $is_active
 * @property int $priority
 * @property string $created_date
 * @property string $updated_date
 * @property int $user_list_related_person_contact_id
 */
class UserListRelatedPersonType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Related_Person_Type';

    protected $fillable = ['id', 'user_list_related_person_id', 'type', 'is_primary', 'is_active', 'priority', 'created_date', 'updated_date', 'user_list_related_person_contact_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
