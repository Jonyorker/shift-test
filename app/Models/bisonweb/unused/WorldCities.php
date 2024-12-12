<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $Country
 * @property string $City
 * @property string $AccentCity
 * @property string $Region
 * @property string $Population
 * @property string $Latitude
 * @property string $Longitude
 */
class WorldCities extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'World_Cities';

    protected $fillable = ['Country', 'City', 'AccentCity', 'Region', 'Population', 'Latitude', 'Longitude'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
