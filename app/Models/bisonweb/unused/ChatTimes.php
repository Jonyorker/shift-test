<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $thread_id
 * @property int $user_id
 * @property int $message_id
 * @property int $increment
 * @property string $unit
 * @property string $created_datetime
 * @property string $response_datetime
 */
class ChatTimes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chat_Times';

    protected $fillable = ['id', 'thread_id', 'user_id', 'message_id', 'increment', 'unit', 'created_datetime', 'response_datetime'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
