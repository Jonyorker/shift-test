<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $leg
 * @property string $reqhash
 * @property int $startpay
 * @property int $timepay
 * @property int $distpay
 * @property int $eventpay
 * @property int $surgepay
 * @property int $extrapay
 * @property int $idlepay
 * @property int $totalpay
 * @property string $reqby
 * @property string $reqdt
 * @property int $driversent
 * @property int $drivetime
 * @property int $drivedist
 * @property string $request
 * @property string $response
 * @property int $labourpay
 * @property int $reason
 * @property int $shiftid
 * @property int $archive
 */
class BisonjpcData extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_jpcData';

    protected $fillable = ['id', 'leg', 'reqhash', 'startpay', 'timepay', 'distpay', 'eventpay', 'surgepay', 'extrapay', 'idlepay', 'totalpay', 'reqby', 'reqdt', 'driversent', 'drivetime', 'drivedist', 'request', 'response', 'labourpay', 'reason', 'shiftid', 'archive'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
