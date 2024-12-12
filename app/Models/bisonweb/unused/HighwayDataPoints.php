<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $highway_conditions_id
 * @property float $latitude
 * @property float $longitude
 */
class HighwayDataPoints extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Highway_Data_Points';

    protected $fillable = ['id', 'highway_conditions_id', 'latitude', 'longitude'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
