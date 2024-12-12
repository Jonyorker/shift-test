<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $date_trigger
 * @property string $userid
 * @property int $PrevValue
 * @property int $NewValue
 * @property string $updatetype
 * @property string $appname
 * @property int $Notification_ID
 * @property int $Notification_pref_ID
 */
class NotificationFlagTracking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Notification_Flag_Tracking';

    protected $fillable = ['ID', 'date_trigger', 'userid', 'PrevValue', 'NewValue', 'updatetype', 'appname', 'Notification_ID', 'Notification_pref_ID'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
