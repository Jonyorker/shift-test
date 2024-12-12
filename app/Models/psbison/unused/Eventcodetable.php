<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $abbr
 * @property string $name
 * @property int $code
 * @property string $locked
 * @property string $userlabelname
 * @property string $edicode
 * @property string $mile_typ_to_stop
 * @property string $mile_typ_from_stop
 * @property string $drv_pay_event
 * @property string $fuel_tax_event
 * @property string $fgt_event
 * @property string $mfh_status_event
 * @property string $lgh_status_event
 * @property string $primary_event
 * @property string $other_event
 * @property string $trl_event
 * @property mixed $timestamp
 * @property string $ect_payondepart
 * @property string $ect_trlstart
 * @property string $ect_trlend
 * @property string $ect_billable
 * @property string $ect_trcdrv_event
 * @property string $ect_cmdcty_req
 * @property string $ect_retired
 * @property string $ect_purchase_service
 * @property string $ect_EndDeadHead_event
 * @property string $ect_BeginDeadHead_event
 * @property string $ect_bt_start
 * @property string $ect_bt_end
 * @property string $ect_mt_start
 * @property string $ect_mt_end
 * @property string $ect_ld_start
 * @property string $ect_ld_end
 * @property string $ect_event_like_abbr
 * @property string $ect_systemcode
 * @property int $ect_defaultdwelltime
 * @property float $ect_defaulttimefirst
 * @property float $ect_defaulttimesubnotb2b
 * @property float $ect_defaulttimesubb2b
 */
class Eventcodetable extends Model
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
    protected $table = 'Eventcodetable';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'abbr';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    protected $fillable = ['name', 'code', 'locked', 'userlabelname', 'edicode', 'mile_typ_to_stop', 'mile_typ_from_stop', 'drv_pay_event', 'fuel_tax_event', 'fgt_event', 'mfh_status_event', 'lgh_status_event', 'primary_event', 'other_event', 'trl_event', 'timestamp', 'ect_payondepart', 'ect_trlstart', 'ect_trlend', 'ect_billable', 'ect_trcdrv_event', 'ect_cmdcty_req', 'ect_retired', 'ect_purchase_service', 'ect_EndDeadHead_event', 'ect_BeginDeadHead_event', 'ect_bt_start', 'ect_bt_end', 'ect_mt_start', 'ect_mt_end', 'ect_ld_start', 'ect_ld_end', 'ect_event_like_abbr', 'ect_systemcode', 'ect_defaultdwelltime', 'ect_defaulttimefirst', 'ect_defaulttimesubnotb2b', 'ect_defaulttimesubb2b'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
