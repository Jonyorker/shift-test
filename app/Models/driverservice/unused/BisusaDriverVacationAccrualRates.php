<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $driver_code
 * @property string $created_date
 * @property float $calculated_rate
 * @property float $bypassed_rate
 * @property string $updated_date
 */
class BisusaDriverVacationAccrualRates extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisusa_Driver_Vacation_Accrual_Rates';

    protected $fillable = ['driver_code', 'created_date', 'calculated_rate', 'bypassed_rate', 'updated_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
