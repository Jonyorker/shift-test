<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $label
 * @property string $code
 * @property int $is_active
 */
class SuppliersMaintenanceRoles extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Suppliers_Maintenance_Roles';

    protected $fillable = ['id', 'label', 'code', 'is_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
