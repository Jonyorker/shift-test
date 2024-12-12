<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $reason_id
 * @property int $start_by
 * @property string $start_datetime
 * @property int $end_by
 * @property string $end_datetime
 * @property string $status
 * @property int $is_test
 * @property string $uid
 * @property int $queue_id
 * @property int $end_reason_id
 */
class ChatThreads extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chat_Threads';

    protected $fillable = ['id', 'reason_id', 'start_by', 'start_datetime', 'end_by', 'end_datetime', 'status', 'is_test', 'uid', 'queue_id', 'end_reason_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
