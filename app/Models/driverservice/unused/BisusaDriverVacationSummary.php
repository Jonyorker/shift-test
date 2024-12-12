<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $driver_code
 * @property float $current_vacation_amount
 * @property string $created_date
 * @property string $updated_date
 */
class BisusaDriverVacationSummary extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisusa_Driver_Vacation_Summary';

    protected $fillable = ['driver_code', 'current_vacation_amount', 'created_date', 'updated_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
