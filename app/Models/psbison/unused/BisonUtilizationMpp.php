<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $mpp_id
 * @property string $trc_number
 * @property int $mpp_last30miles
 * @property int $mpp_last30trips
 * @property int $mpp_miles1
 * @property int $mpp_miles2
 * @property int $mpp_miles3
 * @property int $mpp_miles4
 * @property int $mpp_miles5
 * @property int $mpp_miles6
 * @property int $mpp_last30milesrank
 * @property int $mpp_miles6rank
 * @property string $daterun
 * @property string $mpp_startdate
 * @property int $mpp_med30
 * @property int $mpp_med180
 * @property string $mpp_fleet
 * @property int $mpp_m1
 * @property int $mpp_m2
 * @property int $mpp_m3
 * @property int $mpp_m4
 * @property int $mpp_m5
 * @property int $mpp_m6
 * @property int $mpp_m7
 * @property int $mpp_m8
 * @property int $mpp_m9
 * @property int $mpp_m10
 * @property int $mpp_m11
 * @property int $mpp_m12
 * @property int $mpp_MTD_status
 * @property int $mpp_drops6m
 * @property int $mpp_latedrop6m
 * @property int $mpp_us1
 * @property int $mpp_us2
 * @property int $mpp_us3
 * @property int $mpp_us4
 * @property int $mpp_us5
 * @property int $mpp_us6
 * @property int $mpp_drops1y
 * @property int $mpp_latedrops1y
 */
class BisonUtilizationMpp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Utilization_Mpp';

    protected $fillable = ['id', 'mpp_id', 'trc_number', 'mpp_last30miles', 'mpp_last30trips', 'mpp_miles1', 'mpp_miles2', 'mpp_miles3', 'mpp_miles4', 'mpp_miles5', 'mpp_miles6', 'mpp_last30milesrank', 'mpp_miles6rank', 'daterun', 'mpp_startdate', 'mpp_med30', 'mpp_med180', 'mpp_fleet', 'mpp_m1', 'mpp_m2', 'mpp_m3', 'mpp_m4', 'mpp_m5', 'mpp_m6', 'mpp_m7', 'mpp_m8', 'mpp_m9', 'mpp_m10', 'mpp_m11', 'mpp_m12', 'mpp_MTD_status', 'mpp_drops6m', 'mpp_latedrop6m', 'mpp_us1', 'mpp_us2', 'mpp_us3', 'mpp_us4', 'mpp_us5', 'mpp_us6', 'mpp_drops1y', 'mpp_latedrops1y'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
