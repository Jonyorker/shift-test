<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $vehicle_id
 * @property string $driver_id
 * @property string $incident_time
 * @property string $message_location
 * @property string $trigger_event
 * @property string $trigger_data
 * @property float $incident_speed
 * @property string $time_added
 * @property string $transaction_id
 * @property int $source_id
 */
class DrmCriticalIncidents extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Drm_Critical_Incidents';

    protected $fillable = ['vehicle_id', 'driver_id', 'incident_time', 'message_location', 'trigger_event', 'trigger_data', 'incident_speed', 'time_added', 'transaction_id', 'source_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
