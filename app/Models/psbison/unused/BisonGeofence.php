<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $cmpid
 * @property int $vertex
 * @property float $lat
 * @property float $lng
 */
class BisonGeofence extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Geofence';

    protected $fillable = ['id', 'cmpid', 'vertex', 'lat', 'lng'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
