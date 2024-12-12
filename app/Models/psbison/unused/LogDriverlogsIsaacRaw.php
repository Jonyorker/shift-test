<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $mpp_id
 * @property string $last_updated
 * @property string $effective_date
 * @property string $off_duty
 * @property string $sleeper
 * @property string $driving
 * @property string $on_duty
 * @property string $work
 * @property string $no_work
 */
class LogDriverlogsIsaacRaw extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Log_Driverlogs_Isaac_Raw';

    protected $fillable = ['mpp_id', 'last_updated', 'effective_date', 'off_duty', 'sleeper', 'driving', 'on_duty', 'work', 'no_work'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
