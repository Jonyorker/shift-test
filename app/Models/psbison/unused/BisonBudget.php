<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $year
 * @property int $month
 * @property float $RPM
 * @property int $Miles
 * @property int $Days
 * @property int $ActualTLSales
 * @property int $tractors
 * @property int $miles_cityoo
 * @property int $tractors_cityoo
 * @property int $miles_cityco
 * @property int $tractors_cityco
 * @property int $miles_hwy
 * @property int $tractors_hwy
 */
class BisonBudget extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Budget';

    protected $fillable = ['year', 'month', 'RPM', 'Miles', 'Days', 'ActualTLSales', 'tractors', 'miles_cityoo', 'tractors_cityoo', 'miles_cityco', 'tractors_cityco', 'miles_hwy', 'tractors_hwy'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
