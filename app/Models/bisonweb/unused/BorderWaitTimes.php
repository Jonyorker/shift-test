<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $port_number
 * @property string $border
 * @property string $location
 * @property string $hours_of_operation
 * @property string $last_updated
 * @property int $commercial_lans
 * @property string $std_status
 * @property int $std_delay
 * @property int $std_open
 * @property string $fast_status
 * @property int $fast_delay
 * @property int $fast_open
 * @property int $cty_code
 */
class BorderWaitTimes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Border_Wait_Times';

    protected $fillable = ['id', 'port_number', 'border', 'location', 'hours_of_operation', 'last_updated', 'commercial_lans', 'std_status', 'std_delay', 'std_open', 'fast_status', 'fast_delay', 'fast_open', 'cty_code'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
