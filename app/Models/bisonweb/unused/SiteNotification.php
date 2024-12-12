<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $domain
 * @property string $created_date
 * @property string $created_by
 * @property int $is_active
 * @property string $title
 * @property string $message
 * @property string $start_date
 * @property string $end_date
 * @property string $route_name
 * @property string $notification_type
 * @property bool $once_per_session
 * @property int $once
 * @property string $country
 */
class SiteNotification extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Site_Notification';

    protected $fillable = ['id', 'domain', 'created_date', 'created_by', 'is_active', 'title', 'message', 'start_date', 'end_date', 'route_name', 'notification_type', 'once_per_session', 'once', 'country'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
