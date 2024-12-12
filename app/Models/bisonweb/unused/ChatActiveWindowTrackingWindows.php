<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $chat_active_window_tracking_id
 * @property string $window_name
 * @property int $window_id
 * @property bool $is_active_window
 */
class ChatActiveWindowTrackingWindows extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chat_Active_Window_Tracking_Windows';

    protected $fillable = ['id', 'chat_active_window_tracking_id', 'window_name', 'window_id', 'is_active_window'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
