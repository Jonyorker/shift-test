<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $maintenance_date
 * @property int $no_work
 * @property string $unit_number
 * @property string $tractor_plate
 * @property string $vin
 * @property string $created_date
 * @property string $ip_address
 * @property string $no_work_comment
 */
class OwnerMaintenanceRecords extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Owner_Maintenance_Records';

    protected $fillable = ['id', 'emp_id', 'maintenance_date', 'no_work', 'unit_number', 'tractor_plate', 'vin', 'created_date', 'ip_address', 'no_work_comment'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
