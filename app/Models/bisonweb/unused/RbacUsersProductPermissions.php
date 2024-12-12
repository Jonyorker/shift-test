<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rbac_product_id
 * @property int $rbac_users_id
 * @property int $has_access
 */
class RbacUsersProductPermissions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Users_Product_Permissions';

    protected $fillable = ['id', 'rbac_product_id', 'rbac_users_id', 'has_access'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
