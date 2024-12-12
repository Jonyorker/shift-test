<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $ord
 * @property int $seq
 * @property int $mov
 * @property int $leg
 * @property string $event
 * @property string $dt
 * @property string $cmp
 * @property int $city
 * @property string $cty_nmstct
 * @property int $pcs
 * @property int $wgt
 * @property int $pallets
 * @property string $status
 * @property string $trl
 * @property string $ponum
 * @property string $carid
 * @property string $cmt
 * @property int $tripord
 * @property int $tripstp
 * @property int $tripleg
 * @property int $manifest
 * @property string $depdt
 * @property string $loaded
 * @property string $lastautoupdate
 * @property string $earlydt
 * @property string $latedt
 */
class BisonLTLExecution extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BisonLTL_Execution';

    protected $fillable = ['id', 'ord', 'seq', 'mov', 'leg', 'event', 'dt', 'cmp', 'city', 'cty_nmstct', 'pcs', 'wgt', 'pallets', 'status', 'trl', 'ponum', 'carid', 'cmt', 'tripord', 'tripstp', 'tripleg', 'manifest', 'depdt', 'loaded', 'lastautoupdate', 'earlydt', 'latedt'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
