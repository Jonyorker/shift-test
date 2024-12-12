<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $SN
 * @property string $TruckID
 * @property string $TruckName
 * @property string $DispSysTruckID
 * @property int $DefaultDriver
 * @property int $DefaultCabUnit
 * @property int $CurrentDispatcher
 * @property int $InBox
 * @property int $OutBox
 * @property int $Retired
 * @property bool $KeepHistory
 * @property string $MAPIProfile
 * @property string $MAPIPassword
 * @property string $InternetAlias
 * @property int $GroupFlag
 * @property int $UseAdminMailBox
 * @property string $SMTPReplyAddress
 * @property string $EmailFolderID
 * @property int $AfterEmailSend
 * @property string $SMTPLogin
 * @property string $SMTPPassword
 * @property string $EMailFolderName
 * @property string $AlternateID
 * @property int $GenericReeferUnitSN
 * @property string $updated_on
 * @property int $PositionsBox
 * @property int $MaxDelayMins
 * @property string $DelayedUntil
 */
class TblTrucks extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TblTrucks';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'SN';

    protected $fillable = ['TruckID', 'TruckName', 'DispSysTruckID', 'DefaultDriver', 'DefaultCabUnit', 'CurrentDispatcher', 'InBox', 'OutBox', 'Retired', 'KeepHistory', 'MAPIProfile', 'MAPIPassword', 'InternetAlias', 'GroupFlag', 'UseAdminMailBox', 'SMTPReplyAddress', 'EmailFolderID', 'AfterEmailSend', 'SMTPLogin', 'SMTPPassword', 'EMailFolderName', 'AlternateID', 'GenericReeferUnitSN', 'updated_on', 'PositionsBox', 'MaxDelayMins', 'DelayedUntil'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
