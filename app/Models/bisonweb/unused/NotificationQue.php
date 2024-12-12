<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $notification_script_id
 * @property int $notification_pref_id
 * @property string $created_on
 * @property string $send_date
 * @property string $to
 * @property string $from
 * @property string $type
 * @property string $subject
 * @property string $message
 * @property int $parent_id
 * @property int $is_test
 * @property string $cc
 * @property string $bcc
 * @property int $is_sent
 * @property string $additional_data
 */
class NotificationQue extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Notification_Que';

    protected $fillable = ['id', 'notification_script_id', 'notification_pref_id', 'created_on', 'send_date', 'to', 'from', 'type', 'subject', 'message', 'parent_id', 'is_test', 'cc', 'bcc', 'is_sent', 'additional_data'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
