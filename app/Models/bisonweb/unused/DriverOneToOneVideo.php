<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $inviter_id
 * @property string $invitee_id
 * @property string $start_time
 * @property string $end_time
 * @property string $session_id
 * @property string $token
 * @property int $alert_sent
 * @property string $sent_date
 * @property string $created_date
 */
class DriverOneToOneVideo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Driver_One_To_One_Video';

    protected $fillable = ['id', 'inviter_id', 'invitee_id', 'start_time', 'end_time', 'session_id', 'token', 'alert_sent', 'sent_date', 'created_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
