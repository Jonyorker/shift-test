<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $nspr_reasoncode_id
 * @property int $id
 * @property string $fromname
 * @property string $msgdt
 * @property string $recvdt
 * @property int $basesn
 * @property string $drv
 * @property string $move
 * @property string $arrdt
 * @property string $arrtm
 * @property string $depdt
 * @property string $deptm
 * @property string $loc
 * @property string $hrs
 * @property string $signedbol
 * @property string $note
 * @property string $acceptdt
 * @property string $acceptby
 * @property int $payamt
 * @property int $payid
 * @property string $status
 * @property string $statusdt
 * @property string $declinenote
 * @property float $payqty
 * @property string $pyd_description
 * @property int $stp
 * @property int $minover
 * @property string $stpevt
 */
class BisonpayNspayrequest extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonpay_Nspayrequest';

    protected $fillable = ['nspr_reasoncode_id', 'id', 'fromname', 'msgdt', 'recvdt', 'basesn', 'drv', 'move', 'arrdt', 'arrtm', 'depdt', 'deptm', 'loc', 'hrs', 'signedbol', 'note', 'acceptdt', 'acceptby', 'payamt', 'payid', 'status', 'statusdt', 'declinenote', 'payqty', 'pyd_description', 'stp', 'minover', 'stpevt'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
