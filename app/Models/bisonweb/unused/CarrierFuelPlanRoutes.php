<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $carrier_fuel_plan_id
 * @property int $start_city_code
 * @property int $end_city_code
 * @property int $is_active
 * @property string $created_date
 * @property string $updated_date
 * @property string $created_by
 * @property string $updated_by
 */
class CarrierFuelPlanRoutes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Carrier_Fuel_Plan_Routes';

    protected $fillable = ['id', 'carrier_fuel_plan_id', 'start_city_code', 'end_city_code', 'is_active', 'created_date', 'updated_date', 'created_by', 'updated_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
