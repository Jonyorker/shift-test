<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rbac_controllers_id
 * @property string $label
 * @property string $action
 * @property string $type
 * @property int $parent_id
 * @property int $child_id
 * @property int $is_active
 * @property int $is_development
 * @property int $is_certification
 * @property int $is_production
 */
class RbacActions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Actions';

    protected $fillable = ['id', 'rbac_controllers_id', 'label', 'action', 'type', 'parent_id', 'child_id', 'is_active', 'is_development', 'is_certification', 'is_production'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
