<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $start_date
 * @property string $end_date
 * @property string $created_date
 * @property string $updated_date
 * @property string $created_by
 * @property string $carrier_id
 * @property string $updated_by
 * @property int $is_active
 * @property float $total_miles
 */
class CarrierFuelPlan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Carrier_Fuel_Plan';

    protected $fillable = ['id', 'start_date', 'end_date', 'created_date', 'updated_date', 'created_by', 'carrier_id', 'updated_by', 'is_active', 'total_miles'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
