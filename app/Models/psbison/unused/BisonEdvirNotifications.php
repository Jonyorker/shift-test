<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_date
 * @property string $eventTS
 * @property string $eventTS_cst
 * @property string $inspectedEquipment
 * @property int $unitAddress
 * @property string $deviceID
 * @property string $equipType
 * @property float $lat
 * @property float $lon
 * @property string $posTS
 * @property string $posTS_cst
 * @property int $posType
 * @property int $ignitionStatus
 * @property int $tripStatus
 * @property int $ltdDistance
 * @property string $driverID
 * @property bool $driverAuthenticated
 * @property bool $hasdefects
 * @property bool $closedbydriver
 * @property int $transaction_id
 */
class BisonEdvirNotifications extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Edvir_Notifications';

    protected $fillable = ['created_date', 'eventTS', 'eventTS_cst', 'inspectedEquipment', 'unitAddress', 'deviceID', 'equipType', 'lat', 'lon', 'posTS', 'posTS_cst', 'posType', 'ignitionStatus', 'tripStatus', 'ltdDistance', 'driverID', 'driverAuthenticated', 'hasdefects', 'closedbydriver', 'transaction_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
