<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $load_number
 * @property int $lgh_number
 * @property string $ckc_location
 * @property string $ckc_datetime
 * @property string $ckc_addby
 * @property string $ckc_adddate
 * @property string $iceman_pickupeta
 * @property string $iceman_deliveryeta
 * @property int $iceman_viewed
 * @property string $iceman_latereason
 * @property string $iceman_trailer
 * @property int $iceman_pieces
 * @property int $iceman_weight
 * @property int $stp_number
 * @property float $latitude
 * @property float $longitude
 * @property int $in_couch
 * @property string $edited_by
 * @property string $edited_date
 */
class LgstCheckcall extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Lgst_Checkcall';

    protected $fillable = ['load_number', 'lgh_number', 'ckc_location', 'ckc_datetime', 'ckc_addby', 'ckc_adddate', 'iceman_pickupeta', 'iceman_deliveryeta', 'iceman_viewed', 'iceman_latereason', 'iceman_trailer', 'iceman_pieces', 'iceman_weight', 'stp_number', 'latitude', 'longitude', 'in_couch', 'edited_by', 'edited_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
