<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $thread_id
 * @property string $emp_id
 * @property string $start_datetime
 * @property string $end_datetime
 * @property int $assigned
 * @property string $user_type
 * @property string $type
 */
class ChatUsers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chat_Users';

    protected $fillable = ['id', 'thread_id', 'emp_id', 'start_datetime', 'end_datetime', 'assigned', 'user_type', 'type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
