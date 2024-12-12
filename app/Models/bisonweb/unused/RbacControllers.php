<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rbac_product_id
 * @property string $label
 * @property string $controller
 * @property int $is_active
 * @property int $is_development
 * @property int $is_certification
 * @property int $is_production
 * @property string $module
 */
class RbacControllers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Controllers';

    protected $fillable = ['id', 'rbac_product_id', 'label', 'controller', 'is_active', 'is_development', 'is_certification', 'is_production', 'module'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
