<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $queue_label
 * @property string $start_time
 * @property string $end_time
 * @property string $day_of_the_week
 * @property bool $is_active
 * @property string $code
 * @property int $order
 * @property int $filter_by_fleet
 */
class ChatQueues extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chat_Queues';

    protected $fillable = ['id', 'queue_label', 'start_time', 'end_time', 'day_of_the_week', 'is_active', 'code', 'order', 'filter_by_fleet'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
