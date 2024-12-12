<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $mpp_id
 * @property string $log_date
 * @property string $activity
 * @property int $duration
 * @property string $date_created
 * @property string $date_updated
 */
class LogDriverlogsPlatformScience extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Log_Driverlogs_Platform_Science';

    protected $fillable = ['mpp_id', 'log_date', 'activity', 'duration', 'date_created', 'date_updated'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
