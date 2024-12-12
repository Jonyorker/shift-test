<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rbac_product_id
 * @property string $created_date
 * @property string $label
 * @property string $route_name
 * @property string $version
 * @property int $parent_id
 * @property int $child_id
 * @property string $updated_date
 * @property int $is_active
 * @property int $is_development
 * @property int $is_certification
 * @property int $is_production
 * @property string $initial_version
 */
class RbacApplicationRoutes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Application_Routes';

    protected $fillable = ['id', 'rbac_product_id', 'created_date', 'label', 'route_name', 'version', 'parent_id', 'child_id', 'updated_date', 'is_active', 'is_development', 'is_certification', 'is_production', 'initial_version'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
