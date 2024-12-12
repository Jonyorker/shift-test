<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $SN
 * @property string $UnitID
 * @property int $Type
 * @property int $Truck
 * @property int $CurrentDispatcher
 * @property int $InBox
 * @property int $OutBox
 * @property bool $Retired
 * @property int $GroupFlag
 * @property int $UpdateGroup
 * @property string $MCPassword
 * @property int $LinkedAddrType
 * @property int $LinkedObjSN
 * @property string $InstanceId
 * @property bool $RouteSyncEnabled
 * @property bool $PositionOnly
 * @property bool $EnableZippedBlobs
 * @property int $OutInstanceId
 */
class TblCabUnits extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TblCabUnits';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'SN';

    protected $fillable = ['SN', 'UnitID', 'Type', 'Truck', 'CurrentDispatcher', 'InBox', 'OutBox', 'Retired', 'GroupFlag', 'UpdateGroup', 'MCPassword', 'LinkedAddrType', 'LinkedObjSN', 'InstanceId', 'RouteSyncEnabled', 'PositionOnly', 'EnableZippedBlobs', 'OutInstanceId'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
