<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rbac_product_id
 * @property string $label
 * @property string $code
 * @property string $notes
 * @property int $is_active
 * @property int $is_default
 * @property int $is_auth_default
 * @property int $is_employee_default
 * @property int $is_auto_assignment
 * @property int $admin_assigment_only
 */
class RbacRoles extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Roles';

    protected $fillable = ['id', 'rbac_product_id', 'label', 'code', 'notes', 'is_active', 'is_default', 'is_auth_default', 'is_employee_default', 'is_auto_assignment', 'admin_assigment_only'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
