<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $yard_monitor_id
 * @property string $number
 * @property string $type
 * @property string $owner
 * @property int $is_primary
 */
class YardMonitorTrl extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Yard_Monitor_Trl';

    protected $fillable = ['id', 'yard_monitor_id', 'number', 'type', 'owner', 'is_primary'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
