<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $terminal
 * @property string $code
 * @property float $latitude
 * @property float $longitude
 * @property float $radius_in_miles
 */
class TerminalGeocoordinate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Terminal_Geocoordinate';

    protected $fillable = ['id', 'terminal', 'code', 'latitude', 'longitude', 'radius_in_miles'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
