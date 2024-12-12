<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_tracking_id
 * @property string $fleet
 */
class ChatUserTrackingFleets extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chat_User_Tracking_Fleets';

    protected $fillable = ['id', 'user_tracking_id', 'fleet'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
