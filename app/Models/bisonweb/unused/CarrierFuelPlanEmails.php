<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $carrier_fuel_plan_id
 * @property string $email_address
 * @property int $is_active
 * @property string $created_date
 * @property string $updated_date
 * @property string $created_by
 * @property int $email_sent
 */
class CarrierFuelPlanEmails extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Carrier_Fuel_Plan_Emails';

    protected $fillable = ['id', 'carrier_fuel_plan_id', 'email_address', 'is_active', 'created_date', 'updated_date', 'created_by', 'email_sent'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
