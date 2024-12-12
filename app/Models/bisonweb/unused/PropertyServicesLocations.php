<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $location
 */
class PropertyServicesLocations extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Property_Services_Locations';

    protected $fillable = ['id', 'location'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
