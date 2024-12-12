<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $unit_number
 * @property string $mainteance_date
 * @property int $maintenance_record_id
 */
class OwnerMaintenance extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Owner_Maintenance';

    protected $fillable = ['id', 'emp_id', 'unit_number', 'mainteance_date', 'maintenance_record_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
