<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $event_date
 * @property int $event_date_unix
 * @property string $rabbit_id
 * @property int $queue_id
 * @property int $queue_count
 */
class ChatUserTracking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chat_User_Tracking';

    protected $fillable = ['id', 'emp_id', 'event_date', 'event_date_unix', 'rabbit_id', 'queue_id', 'queue_count'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
