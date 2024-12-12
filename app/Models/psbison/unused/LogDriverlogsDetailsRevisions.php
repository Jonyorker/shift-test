<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $mpp_id
 * @property string $tractor_id
 * @property string $activity
 * @property string $start_time
 * @property int $duration
 * @property int $odometer
 * @property int $distance_driven
 * @property float $home_terminal_gmt
 * @property string $terminal
 * @property int $log_id
 * @property string $edit
 * @property string $created_date
 */
class LogDriverlogsDetailsRevisions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Log_Driverlogs_Details_Revisions';

    protected $fillable = ['mpp_id', 'tractor_id', 'activity', 'start_time', 'duration', 'odometer', 'distance_driven', 'home_terminal_gmt', 'terminal', 'log_id', 'edit', 'created_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
