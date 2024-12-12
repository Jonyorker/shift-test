<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $trl
 * @property string $status
 * @property string $gpsdesc
 * @property string $gpsdate
 * @property float $gpslat
 * @property float $gpslong
 * @property string $curryard
 * @property int $cmpleg
 * @property string $cmpcmp
 * @property int $currleg
 * @property string $currcmp
 * @property string $currdt
 * @property int $nextleg
 * @property string $nextcmp
 * @property string $nextdt
 * @property int $finalleg
 * @property string $finalcmp
 * @property string $finaldt
 * @property string $lastupdate
 * @property string $cmpdt
 * @property int $cmpcity
 * @property int $currcity
 * @property int $nextcity
 * @property int $finalcity
 * @property string $equiptype
 * @property string $possession
 */
class BisontrlCurrentstatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisontrl_Currentstatus';

    protected $fillable = ['trl', 'status', 'gpsdesc', 'gpsdate', 'gpslat', 'gpslong', 'curryard', 'cmpleg', 'cmpcmp', 'currleg', 'currcmp', 'currdt', 'nextleg', 'nextcmp', 'nextdt', 'finalleg', 'finalcmp', 'finaldt', 'lastupdate', 'cmpdt', 'cmpcity', 'currcity', 'nextcity', 'finalcity', 'equiptype', 'possession'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
