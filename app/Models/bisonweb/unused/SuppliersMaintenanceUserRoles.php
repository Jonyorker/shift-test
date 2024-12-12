<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $employee_id
 * @property int $suppliers_maintenance_role_id
 * @property int $is_active
 * @property string $created_date
 * @property string $modified_date
 */
class SuppliersMaintenanceUserRoles extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Suppliers_Maintenance_User_Roles';

    protected $fillable = ['id', 'employee_id', 'suppliers_maintenance_role_id', 'is_active', 'created_date', 'modified_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
