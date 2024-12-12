<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $manifest
 * @property string $startdt
 * @property string $startcmp
 * @property string $startcty
 * @property string $enddt
 * @property string $endcmp
 * @property string $endcty
 * @property int $type
 * @property string $createdt
 * @property string $createby
 * @property string $updatedt
 * @property string $updateby
 * @property int $ponum
 * @property string $carid
 * @property int $bisonmov
 * @property int $bisonord
 * @property string $status
 * @property string $startprov
 * @property string $endprov
 * @property string $startdtdep
 * @property string $enddtdep
 * @property int $pickstop
 * @property int $dropstop
 * @property string $notes
 * @property string $loaded
 * @property string $currtrailer
 * @property string $pickearlydt
 * @property string $picklatedt
 * @property string $delvearlydt
 * @property string $delvlatedt
 * @property string $posent
 * @property string $posentby
 * @property string $pronum
 */
class BisonltlManifest extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonltl_Manifest';

    protected $fillable = ['manifest', 'startdt', 'startcmp', 'startcty', 'enddt', 'endcmp', 'endcty', 'type', 'createdt', 'createby', 'updatedt', 'updateby', 'ponum', 'carid', 'bisonmov', 'bisonord', 'status', 'startprov', 'endprov', 'startdtdep', 'enddtdep', 'pickstop', 'dropstop', 'notes', 'loaded', 'currtrailer', 'pickearlydt', 'picklatedt', 'delvearlydt', 'delvlatedt', 'posent', 'posentby', 'pronum'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
