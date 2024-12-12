<?php

namespace App\Models\bisonweb;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $formatted_name
 * @property string $reporting_name
 * @property string $aka_name
 * @property string $birth_date
 * @property string $gender_code
 * @property string $middle_name
 * @property string $created_date
 * @property string $updated_date
 */
class UserList extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_date';

    const UPDATED_AT = 'updated_date';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_list';

    protected $fillable = ['id', 'first_name', 'last_name', 'formatted_name', 'reporting_name', 'aka_name', 'birth_date', 'gender_code', 'middle_name', 'created_date', 'updated_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';

    // Relationships

    /**
     * @return HasOne<UserListAddress>
     */
    public function userListAddress(): HasOne
    {
        return $this->hasOne(UserListAddress::class, 'user_list_id', 'id');
    }

    /**
     * @return HasOne<UserListCompany>
     */
    public function userListCompany(): HasOne
    {
        return $this->hasOne(UserListCompany::class, 'user_list_id', 'id');
    }

    /**
     * @return HasMany<UserListContact>
     */
    public function userListContact(): HasMany
    {
        return $this->hasMany(UserListContact::class, 'user_list_id', 'id');
    }

    /**
     * @return HasOne<RbacUsers>
     */
    public function rbacUsers(): HasOne
    {
        return $this->hasOne(RbacUsers::class, 'user_id', 'id');
    }

    // Methods
    public function getUsername(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
