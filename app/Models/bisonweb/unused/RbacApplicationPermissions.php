<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rbac_application_routes_id
 * @property int $rbac_roles_id
 * @property int $is_allowed
 */
class RbacApplicationPermissions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Application_Permissions';

    protected $fillable = ['id', 'rbac_application_routes_id', 'rbac_roles_id', 'is_allowed'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
