<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $yard_monitor_id
 * @property int $safety_shoes
 * @property int $safety_vest
 */
class YardMonitorPpe extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Yard_Monitor_Ppe';

    protected $fillable = ['id', 'yard_monitor_id', 'safety_shoes', 'safety_vest'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
