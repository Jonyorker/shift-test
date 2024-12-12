<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $et_type
 * @property int $et_id
 * @property int $stp_number
 * @property int $evt_number
 * @property int $evt_mov_number
 * @property string $evt_eventcode
 * @property string $evt_startdate
 * @property string $evt_enddate
 * @property string $evt_status
 * @property string $evt_driver1
 * @property string $evt_tractor
 * @property string $evt_trailer1
 * @property string $evt_eventcode_old
 * @property string $evt_startdate_old
 * @property string $evt_enddate_old
 * @property string $evt_status_old
 * @property string $evt_driver1_old
 * @property string $evt_tractor_old
 * @property string $evt_trailer1_old
 * @property string $et_changeby
 * @property string $et_changedate
 * @property string $evt_carrier
 * @property string $evt_carrier_old
 * @property string $evt_trailer2
 * @property string $evt_trailer2_old
 * @property string $evt_dolly
 * @property string $evt_dolly_old
 * @property string $evt_departure_status
 * @property string $evt_departure_status_old
 */
class BisonEventtrace extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Eventtrace';

    protected $fillable = ['et_type', 'et_id', 'stp_number', 'evt_number', 'evt_mov_number', 'evt_eventcode', 'evt_startdate', 'evt_enddate', 'evt_status', 'evt_driver1', 'evt_tractor', 'evt_trailer1', 'evt_eventcode_old', 'evt_startdate_old', 'evt_enddate_old', 'evt_status_old', 'evt_driver1_old', 'evt_tractor_old', 'evt_trailer1_old', 'et_changeby', 'et_changedate', 'evt_carrier', 'evt_carrier_old', 'evt_trailer2', 'evt_trailer2_old', 'evt_dolly', 'evt_dolly_old', 'evt_departure_status', 'evt_departure_status_old'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
