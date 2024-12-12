<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rbac_actions_id
 * @property int $rbac_roles_id
 * @property int $is_allowed
 */
class RbacPermissions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Permissions';

    protected $fillable = ['id', 'rbac_actions_id', 'rbac_roles_id', 'is_allowed'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
