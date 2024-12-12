<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $employee_id
 * @property string $cmp_id
 * @property int $is_active
 * @property string $created_date
 * @property string $modified_date
 */
class SuppliersMaintenanceUserYards extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Suppliers_Maintenance_User_Yards';

    protected $fillable = ['id', 'employee_id', 'cmp_id', 'is_active', 'created_date', 'modified_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
