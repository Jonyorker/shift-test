<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $thread_id
 * @property int $user_id
 * @property string $uid
 * @property string $message
 * @property string $datetime
 * @property string $system_name
 * @property int $page_number
 * @property string $click_event
 * @property string $click_event_label
 */
class ChatMessages extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chat_Messages';

    protected $fillable = ['id', 'thread_id', 'user_id', 'uid', 'message', 'datetime', 'system_name', 'page_number', 'click_event', 'click_event_label'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
