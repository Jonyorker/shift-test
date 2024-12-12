<?php

namespace App\Models\psbison;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $ord_hdrnumber
 * @property int $stp_number
 * @property string $evt_eventcode
 * @property int $evt_number
 * @property string $evt_startdate
 * @property string $evt_enddate
 * @property string $evt_status
 * @property string $evt_earlydate
 * @property string $evt_latedate
 * @property float $evt_weight
 * @property string $evt_weightunit
 * @property int $fgt_number
 * @property float $evt_count
 * @property string $evt_countunit
 * @property float $evt_volume
 * @property string $evt_volumeunit
 * @property string $evt_pu_dr
 * @property int $evt_sequence
 * @property string $evt_contact
 * @property mixed $timestamp
 * @property string $evt_driver1
 * @property string $evt_driver2
 * @property string $evt_tractor
 * @property string $evt_trailer1
 * @property string $evt_trailer2
 * @property string $evt_chassis
 * @property string $evt_dolly
 * @property string $evt_carrier
 * @property string $evt_refype
 * @property string $evt_refnum
 * @property string $evt_reason
 * @property string $evt_enteredby
 * @property int $evt_hubmiles
 * @property int $skip_trigger
 * @property string $bis_proc214
 * @property int $evt_notified
 * @property int $evt_mov_number
 * @property string $evt_departure_status
 * @property string $evt_converter
 * @property int $evt_hubmiles_trailer1
 * @property int $evt_hubmiles_trailer2
 * @property string $evt_chassis2
 * @property string $evt_dolly2
 * @property string $evt_trailer3
 * @property string $evt_trailer4
 * @property int $stp_mfh_number
 * @property int $stp_transfer_stp
 * @property string $evt_lghtype1
 * @property string $evt_lghtype2
 * @property string $evt_lghtype3
 * @property string $evt_lghtype4
 * @property int $evt_mfh_number
 * @property string $evt_dock_worker
 * @property int $item_id
 * @property string $INS_TIMESTAMP
 */
class Event extends Model
{
    use HasFactory;

    const CREATED_AT = 'INS_TIMESTAMP';

    const UPDATED_AT = null;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Event';

    protected $fillable = ['ord_hdrnumber', 'stp_number', 'evt_eventcode', 'evt_number', 'evt_startdate', 'evt_enddate', 'evt_status', 'evt_earlydate', 'evt_latedate', 'evt_weight', 'evt_weightunit', 'fgt_number', 'evt_count', 'evt_countunit', 'evt_volume', 'evt_volumeunit', 'evt_pu_dr', 'evt_sequence', 'evt_contact', 'timestamp', 'evt_driver1', 'evt_driver2', 'evt_tractor', 'evt_trailer1', 'evt_trailer2', 'evt_chassis', 'evt_dolly', 'evt_carrier', 'evt_refype', 'evt_refnum', 'evt_reason', 'evt_enteredby', 'evt_hubmiles', 'skip_trigger', 'bis_proc214', 'evt_notified', 'evt_mov_number', 'evt_departure_status', 'evt_converter', 'evt_hubmiles_trailer1', 'evt_hubmiles_trailer2', 'evt_chassis2', 'evt_dolly2', 'evt_trailer3', 'evt_trailer4', 'stp_mfh_number', 'stp_transfer_stp', 'evt_lghtype1', 'evt_lghtype2', 'evt_lghtype3', 'evt_lghtype4', 'evt_mfh_number', 'evt_dock_worker', 'item_id', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';

    // Relationships

    /**
     * @return HasOne<ManpowerProfile>
     */
    public function manPowerProfile1(): HasOne
    {
        return $this->hasOne(ManpowerProfile::class, 'mpp_id', 'evt_driver1');
    }

    /**
     * @return HasOne<ManpowerProfile>
     */
    public function manPowerProfile2(): HasOne
    {
        return $this->hasOne(ManpowerProfile::class, 'mpp_id', 'evt_driver2');
    }
}
