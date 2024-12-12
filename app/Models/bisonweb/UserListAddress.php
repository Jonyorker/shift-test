<?php

namespace App\Models\bisonweb;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_list_id
 * @property string $address_line_1
 * @property string $address_line_2
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string $country
 * @property int $is_primary
 * @property int $is_active
 * @property string $created_date
 * @property string $updated_date
 * @property float $latitude
 * @property float $longitude
 */
class UserListAddress extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_date';

    const UPDATED_AT = 'updated_date';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Address';

    protected $fillable = ['id', 'user_list_id', 'address_line_1', 'address_line_2', 'city', 'state', 'zip_code', 'country', 'is_primary', 'is_active', 'created_date', 'updated_date', 'latitude', 'longitude'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';

    // Relationships

    /**
     * @return BelongsTo<UserList, UserListAddress>
     */
    public function userList(): BelongsTo
    {
        return $this->belongsTo(UserList::class, 'user_list_id', 'id');
    }

    // Methods
}
