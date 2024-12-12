<?php

namespace App\Models\bisonweb;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property int $user_list_id
 * @property int $user_list_contact_type_id
 * @property string $value
 * @property string $addons
 * @property int $is_primary
 * @property int $is_active
 * @property string $country_iso_code
 * @property string $created_date
 * @property string $updated_date
 */
class UserListContact extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_date';

    const UPDATED_AT = 'updated_date';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Contact';

    protected $fillable = ['id', 'user_list_id', 'user_list_contact_type_id', 'value', 'addons', 'is_primary', 'is_active', 'country_iso_code', 'created_date', 'updated_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';

    // Relationships

    /**
     * @return BelongsTo<UserList, UserListContact>
     */
    public function userList(): BelongsTo
    {
        return $this->belongsTo(UserList::class, 'user_list_id', 'id');
    }

    /**
     * @return HasOne<UserListContactType>
     */
    public function userListContactType(): HasOne
    {
        return $this->hasOne(UserListContactType::class, 'user_list_contact_type_id', 'id');
    }
}
