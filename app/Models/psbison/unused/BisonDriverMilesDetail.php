<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $mpp_id
 * @property string $dm_date
 * @property int $dm_miles
 */
class BisonDriverMilesDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_DriverMilesDetail';

    protected $fillable = ['mpp_id', 'dm_date', 'dm_miles'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
