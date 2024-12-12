<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $driver_code
 * @property string $quarter
 * @property float $accrual_amount
 * @property string $created_date
 * @property string $updated_date
 */
class BisusaDriverVacationAccrual extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisusa_Driver_Vacation_Accrual';

    protected $fillable = ['driver_code', 'quarter', 'accrual_amount', 'created_date', 'updated_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
