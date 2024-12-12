<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $mov
 * @property string $trc
 * @property string $trl
 * @property string $dtrecd
 * @property int $temp1
 * @property int $temp2
 * @property int $temp3
 * @property int $fuellevel
 * @property int $zone1min
 * @property int $zone1max
 * @property int $zone1box
 * @property int $zone1set
 * @property int $zone2box
 * @property int $zone2set
 * @property int $zone3box
 * @property int $zone3set
 * @property int $formid
 * @property int $is_excluded
 * @property string $modified_by
 * @property string $modified_date
 */
class BisonTemperatureHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_TemperatureHistory';

    protected $fillable = ['id', 'mov', 'trc', 'trl', 'dtrecd', 'temp1', 'temp2', 'temp3', 'fuellevel', 'zone1min', 'zone1max', 'zone1box', 'zone1set', 'zone2box', 'zone2set', 'zone3box', 'zone3set', 'formid', 'is_excluded', 'modified_by', 'modified_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
