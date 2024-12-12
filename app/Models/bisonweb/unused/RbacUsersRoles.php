<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rbac_users_id
 * @property int $rbac_roles_id
 * @property string $company_id
 */
class RbacUsersRoles extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Users_Roles';

    protected $fillable = ['id', 'rbac_users_id', 'rbac_roles_id', 'company_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
