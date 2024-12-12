<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $video_filename
 * @property string $video_data
 * @property string $tractor_number
 * @property string $manpower_id
 * @property string $timestamp
 * @property string $event_type
 * @property float $latitude
 * @property float $longitude
 * @property float $speed
 * @property float $duration_seconds
 * @property string $event_time_cst
 * @property int $is_reviewed
 * @property string $assigned_to
 * @property string $assigned_date
 * @property string $location
 * @property string $event_time_utc
 * @property string $confirmation_state
 * @property int $is_ignored
 */
class SeeingMachineVideos extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Seeing_Machine_Videos';

    protected $fillable = ['id', 'video_filename', 'video_data', 'tractor_number', 'manpower_id', 'timestamp', 'event_type', 'latitude', 'longitude', 'speed', 'duration_seconds', 'event_time_cst', 'is_reviewed', 'assigned_to', 'assigned_date', 'location', 'event_time_utc', 'confirmation_state', 'is_ignored'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
