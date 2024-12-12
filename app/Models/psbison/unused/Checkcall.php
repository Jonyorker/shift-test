<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ckc_number
 * @property string $ckc_status
 * @property string $ckc_asgntype
 * @property string $ckc_asgnid
 * @property string $ckc_date
 * @property string $ckc_event
 * @property int $ckc_city
 * @property string $ckc_comment
 * @property string $ckc_updatedby
 * @property string $ckc_updatedon
 * @property int $ckc_latseconds
 * @property int $ckc_longseconds
 * @property int $ckc_lghnumber
 * @property string $ckc_tractor
 * @property string $ckc_extsensoralarm
 * @property string $ckc_vehicleignition
 * @property float $ckc_milesfrom
 * @property string $ckc_directionfrom
 * @property string $ckc_validity
 * @property string $ckc_mtavailable
 * @property int $ckc_minutes
 * @property int $ckc_mileage
 * @property string $ckc_home
 * @property string $ckc_cityname
 * @property string $ckc_state
 * @property string $ckc_zip
 * @property string $ckc_commentlarge
 * @property int $ckc_minutes_to_final
 * @property int $ckc_miles_to_final
 * @property int $ckc_Odometer
 * @property int $TripStatus
 * @property int $ckc_odometer2
 * @property int $ckc_speed
 * @property int $ckc_speed2
 * @property float $ckc_heading
 * @property int $ckc_gps_type
 * @property float $ckc_gps_miles
 * @property float $ckc_fuel_meter
 * @property int $ckc_idle_meter
 * @property string $ckc_ExtraData01
 * @property string $ckc_ExtraData02
 * @property string $ckc_ExtraData03
 * @property string $ckc_ExtraData04
 * @property string $ckc_ExtraData05
 * @property string $ckc_ExtraData06
 * @property string $ckc_ExtraData07
 * @property string $ckc_ExtraData08
 * @property string $ckc_ExtraData09
 * @property string $ckc_ExtraData10
 * @property string $ckc_ExtraData11
 * @property string $ckc_ExtraData12
 * @property string $ckc_ExtraData13
 * @property string $ckc_ExtraData14
 * @property string $ckc_ExtraData15
 * @property string $ckc_ExtraData16
 * @property string $ckc_ExtraData17
 * @property string $ckc_ExtraData18
 * @property string $ckc_ExtraData19
 * @property string $ckc_ExtraData20
 * @property int $ckc_AssociatedMsgSN
 * @property string $ckc_TimeZone
 * @property string $ckc_mcommsystem
 * @property string $ckc_mcommcity
 * @property string $ckc_mcommcitystate
 * @property int $ckc_mcommsplc
 * @property string $ckc_mcommfence
 * @property string $ckc_mcommfenceevent
 * @property string $ckc_QCTTEvent
 * @property string $ckc_subsistence_qualified
 * @property int $ckc_miles_to_next
 * @property float $ckc_client_lat
 * @property float $ckc_client_long
 * @property int $ckc_client_srid
 */
class Checkcall extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Checkcall';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ckc_number';

    protected $fillable = ['ckc_status', 'ckc_asgntype', 'ckc_asgnid', 'ckc_date', 'ckc_event', 'ckc_city', 'ckc_comment', 'ckc_updatedby', 'ckc_updatedon', 'ckc_latseconds', 'ckc_longseconds', 'ckc_lghnumber', 'ckc_tractor', 'ckc_extsensoralarm', 'ckc_vehicleignition', 'ckc_milesfrom', 'ckc_directionfrom', 'ckc_validity', 'ckc_mtavailable', 'ckc_minutes', 'ckc_mileage', 'ckc_home', 'ckc_cityname', 'ckc_state', 'ckc_zip', 'ckc_commentlarge', 'ckc_minutes_to_final', 'ckc_miles_to_final', 'ckc_Odometer', 'TripStatus', 'ckc_odometer2', 'ckc_speed', 'ckc_speed2', 'ckc_heading', 'ckc_gps_type', 'ckc_gps_miles', 'ckc_fuel_meter', 'ckc_idle_meter', 'ckc_ExtraData01', 'ckc_ExtraData02', 'ckc_ExtraData03', 'ckc_ExtraData04', 'ckc_ExtraData05', 'ckc_ExtraData06', 'ckc_ExtraData07', 'ckc_ExtraData08', 'ckc_ExtraData09', 'ckc_ExtraData10', 'ckc_ExtraData11', 'ckc_ExtraData12', 'ckc_ExtraData13', 'ckc_ExtraData14', 'ckc_ExtraData15', 'ckc_ExtraData16', 'ckc_ExtraData17', 'ckc_ExtraData18', 'ckc_ExtraData19', 'ckc_ExtraData20', 'ckc_AssociatedMsgSN', 'ckc_TimeZone', 'ckc_mcommsystem', 'ckc_mcommcity', 'ckc_mcommcitystate', 'ckc_mcommsplc', 'ckc_mcommfence', 'ckc_mcommfenceevent', 'ckc_QCTTEvent', 'ckc_subsistence_qualified', 'ckc_miles_to_next', 'ckc_client_lat', 'ckc_client_long', 'ckc_client_srid'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
