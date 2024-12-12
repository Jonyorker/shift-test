<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $trlid
 * @property int $latitude
 * @property int $longitude
 * @property string $description
 * @property string $reportdt
 * @property string $receivedt
 * @property string $battery
 * @property string $power
 * @property string $quality
 * @property string $location
 * @property string $idlestatus
 * @property int $idletime
 * @property int $speed
 */
class BisonTrailerPosition extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_TrailerPosition';

    protected $fillable = ['id', 'trlid', 'latitude', 'longitude', 'description', 'reportdt', 'receivedt', 'battery', 'power', 'quality', 'location', 'idlestatus', 'idletime', 'speed'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
