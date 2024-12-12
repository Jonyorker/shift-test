<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $log_shunt_task_id
 * @property float $rate
 * @property string $start_date
 * @property string $end_date
 */
class LogShuntRates extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Log_Shunt_rates';

    protected $fillable = ['id', 'log_shunt_task_id', 'rate', 'start_date', 'end_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
