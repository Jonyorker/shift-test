<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $notification_user_id
 * @property int $notification_script_id
 * @property string $mins
 * @property string $hours
 * @property string $dow
 * @property string $dom
 * @property string $month
 * @property int $is_single
 * @property int $is_active
 */
class NotificationPref extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Notification_Pref';

    protected $fillable = ['id', 'notification_user_id', 'notification_script_id', 'mins', 'hours', 'dow', 'dom', 'month', 'is_single', 'is_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
