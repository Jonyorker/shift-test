<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $company_id
 * @property int $ord_number
 * @property int $move_number
 * @property string $carrier_id
 * @property int $car_account
 * @property int $car_contract
 * @property string $gl_code
 * @property int $ref_number
 * @property int $approved_amount
 * @property string $approved_currency
 * @property string $created_by
 * @property string $created_date
 */
class EfsFuelAdvanceCarriers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Efs_Fuel_Advance_Carriers';

    protected $fillable = ['id', 'company_id', 'ord_number', 'move_number', 'carrier_id', 'car_account', 'car_contract', 'gl_code', 'ref_number', 'approved_amount', 'approved_currency', 'created_by', 'created_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
