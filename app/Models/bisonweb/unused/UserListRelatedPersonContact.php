<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_list_related_person_id
 * @property int $user_list_contact_type_id
 * @property string $value
 * @property string $addons
 * @property string $country_iso_code
 * @property int $is_active
 * @property int $is_primary
 * @property string $created_date
 * @property string $updated_date
 */
class UserListRelatedPersonContact extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Related_Person_Contact';

    protected $fillable = ['id', 'user_list_related_person_id', 'user_list_contact_type_id', 'value', 'addons', 'country_iso_code', 'is_active', 'is_primary', 'created_date', 'updated_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
