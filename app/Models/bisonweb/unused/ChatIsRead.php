<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $thread_id
 * @property int $message_id
 * @property int $user_id
 * @property string $read_datetime
 */
class ChatIsRead extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chat_Is_Read';

    protected $fillable = ['id', 'thread_id', 'message_id', 'user_id', 'read_datetime'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
