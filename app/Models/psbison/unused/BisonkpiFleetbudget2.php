<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $yy
 * @property int $mm
 * @property string $fleet
 * @property string $type1
 * @property int $miles
 * @property int $units
 * @property int $oomiles
 * @property int $oounits
 */
class BisonkpiFleetbudget2 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonkpi_Fleetbudget2';

    protected $fillable = ['yy', 'mm', 'fleet', 'type1', 'miles', 'units', 'oomiles', 'oounits'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
