<?php

namespace App\Models\bisonweb;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $id
 * @property int $rbac_product_id
 * @property int $is_active
 * @property string $email
 * @property string $password
 * @property string $ip_address
 * @property string $last_login
 * @property string $first_name
 * @property string $last_name
 * @property string $formatted_name
 * @property string $formatted_name_reversed
 * @property string $aka_name
 * @property string $user_id
 * @property int $password_reset
 * @property int $force_password_reset
 * @property int $force_email_reset
 */
class RbacUsers extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Users';

    protected $fillable = ['id', 'rbac_product_id', 'is_active', 'email', 'password', 'ip_address', 'last_login', 'first_name', 'last_name', 'formatted_name', 'formatted_name_reversed', 'aka_name', 'user_id', 'password_reset', 'force_password_reset', 'force_email_reset'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';

    protected $primaryKey = 'email';

    // Relationships

    /**
     * @return HasOne<UserList>
     */
    public function userList(): HasOne
    {
        return $this->hasOne(UserList::class, 'id', 'id');
    }

    // Methods

}
