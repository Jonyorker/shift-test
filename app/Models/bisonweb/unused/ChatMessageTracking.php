<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $event_date
 * @property int $event_date_unix
 * @property string $rabbit_id
 * @property int $thread_id
 * @property string $message
 * @property string $message_uid
 * @property string $message_date
 */
class ChatMessageTracking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chat_Message_Tracking';

    protected $fillable = ['id', 'emp_id', 'event_date', 'event_date_unix', 'rabbit_id', 'thread_id', 'message', 'message_uid', 'message_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
