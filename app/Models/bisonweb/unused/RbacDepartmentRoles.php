<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rbac_product_id
 * @property int $rbac_role_id
 * @property bool $is_active
 * @property string $company_id
 * @property string $org_level_one
 * @property string $org_level_two
 */
class RbacDepartmentRoles extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Department_Roles';

    protected $fillable = ['id', 'rbac_product_id', 'rbac_role_id', 'is_active', 'company_id', 'org_level_one', 'org_level_two'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
