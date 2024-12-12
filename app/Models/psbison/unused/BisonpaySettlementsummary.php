<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $asgn_type
 * @property string $asgn_id
 * @property string $payperiod
 * @property int $miles
 * @property int $mileagepay
 * @property int $usmilepay
 * @property int $turnpikepay
 * @property int $droppay
 * @property int $borderpay
 * @property int $reeferpay
 * @property int $otherpay
 * @property int $deductions
 * @property int $nontrip
 * @property int $cdnfuel
 * @property int $usfuel
 * @property int $gst
 * @property int $exchange
 * @property int $maintfund
 * @property int $workorders
 */
class BisonpaySettlementsummary extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonpay_Settlementsummary';

    protected $fillable = ['id', 'asgn_type', 'asgn_id', 'payperiod', 'miles', 'mileagepay', 'usmilepay', 'turnpikepay', 'droppay', 'borderpay', 'reeferpay', 'otherpay', 'deductions', 'nontrip', 'cdnfuel', 'usfuel', 'gst', 'exchange', 'maintfund', 'workorders'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
