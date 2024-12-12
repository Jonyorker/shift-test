<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $mppid
 * @property string $fleet
 * @property string $cat
 * @property string $type2
 * @property string $type3
 * @property int $yy
 * @property int $mm
 * @property int $miles
 * @property int $milestm
 * @property int $logdays
 * @property int $logdaystotal
 * @property int $logdaysmiss
 * @property int $hours
 * @property string $asof
 * @property string $result
 * @property string $note
 * @property string $exceptnote
 * @property string $approve
 * @property int $targlog
 * @property int $targmiles
 * @property int $targhours
 * @property int $statchange
 * @property int $logdays6
 * @property int $logdays0
 * @property int $citymiles
 * @property int $cityevents
 * @property string $audit
 */
class BisonpayDttfbonus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonpay_Dttfbonus';

    protected $fillable = ['id', 'mppid', 'fleet', 'cat', 'type2', 'type3', 'yy', 'mm', 'miles', 'milestm', 'logdays', 'logdaystotal', 'logdaysmiss', 'hours', 'asof', 'result', 'note', 'exceptnote', 'approve', 'targlog', 'targmiles', 'targhours', 'statchange', 'logdays6', 'logdays0', 'citymiles', 'cityevents', 'audit'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
