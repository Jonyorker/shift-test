<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $mpp_id
 * @property string $log_date
 * @property float $off_duty
 * @property float $on_duty_driving
 * @property float $on_duty
 * @property float $driving
 * @property float $sleeper
 * @property int $odometer
 * @property int $distance_driven
 * @property string $notes
 * @property float $home_terminal_gmt
 * @property string $tractor_id
 */
class LogDriverlogsSeconds extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Log_Driverlogs_Seconds';

    protected $fillable = ['mpp_id', 'log_date', 'off_duty', 'on_duty_driving', 'on_duty', 'driving', 'sleeper', 'odometer', 'distance_driven', 'notes', 'home_terminal_gmt', 'tractor_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
