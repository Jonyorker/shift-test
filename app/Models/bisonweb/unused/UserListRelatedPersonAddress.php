<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_list_related_person_id
 * @property string $address_line_1
 * @property string $address_line_2
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string $country
 * @property int $is_active
 * @property int $is_primary
 * @property string $created_date
 * @property string $updated_date
 */
class UserListRelatedPersonAddress extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Related_Person_Address';

    protected $fillable = ['id', 'user_list_related_person_id', 'address_line_1', 'address_line_2', 'city', 'state', 'zip_code', 'country', 'is_active', 'is_primary', 'created_date', 'updated_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
