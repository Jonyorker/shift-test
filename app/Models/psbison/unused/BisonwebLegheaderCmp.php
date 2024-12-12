<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property int $has_alt_driver
 * @property int $driver
 * @property string $fleet
 * @property string $type2
 * @property string $type3
 * @property string $tractor_id
 * @property string $trailer_id_primary
 * @property string $trailer_id_pup
 * @property int $lgh_number
 * @property int $mov_number
 * @property string $start_date
 * @property string $end_date
 * @property int $drv_miles
 * @property int $trip_miles
 * @property int $drv_miles_us
 * @property int $trip_miles_us
 * @property int $drv_miles_lcv
 * @property int $trip_miles_lcv
 */
class BisonwebLegheaderCmp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonweb_Legheader_Cmp';

    protected $fillable = ['emp_id', 'has_alt_driver', 'driver', 'fleet', 'type2', 'type3', 'tractor_id', 'trailer_id_primary', 'trailer_id_pup', 'lgh_number', 'mov_number', 'start_date', 'end_date', 'drv_miles', 'trip_miles', 'drv_miles_us', 'trip_miles_us', 'drv_miles_lcv', 'trip_miles_lcv'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
