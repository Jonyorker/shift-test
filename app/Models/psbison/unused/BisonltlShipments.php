<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ord
 * @property string $trl
 * @property int $lastevt
 * @property int $nextevt
 * @property string $note
 * @property string $currentstatus
 * @property string $currentcmp
 * @property string $currentcity
 * @property string $currentdt
 * @property string $planstatus
 * @property string $plancmp
 * @property string $plancity
 * @property string $plandt
 * @property string $ordstatus
 * @property string $currentprov
 * @property string $planprov
 * @property string $reftype
 * @property string $refnumber
 * @property string $latestatus
 * @property int $cwt
 * @property string $flag
 * @property int $planevt
 * @property string $nextstatus
 * @property string $nextcmp
 * @property string $nextcity
 * @property string $nextdt
 * @property string $currevtcode
 * @property string $nextevtcode
 * @property string $planevtcode
 * @property string $nextprov
 * @property string $currtrl
 * @property string $nexttrl
 * @property string $currcar
 * @property string $nextcar
 * @property string $issues
 * @property int $accessorials
 * @property string $acclist
 */
class BisonltlShipments extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonltl_Shipments';

    protected $fillable = ['ord', 'trl', 'lastevt', 'nextevt', 'note', 'currentstatus', 'currentcmp', 'currentcity', 'currentdt', 'planstatus', 'plancmp', 'plancity', 'plandt', 'ordstatus', 'currentprov', 'planprov', 'reftype', 'refnumber', 'latestatus', 'cwt', 'flag', 'planevt', 'nextstatus', 'nextcmp', 'nextcity', 'nextdt', 'currevtcode', 'nextevtcode', 'planevtcode', 'nextprov', 'currtrl', 'nexttrl', 'currcar', 'nextcar', 'issues', 'accessorials', 'acclist'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
