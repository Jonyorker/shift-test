<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $site_notification_id
 * @property string $role
 * @property int $has_access
 * @property string $terminal
 */
class SiteNotificationAccess extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Site_Notification_Access';

    protected $fillable = ['id', 'site_notification_id', 'role', 'has_access', 'terminal'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
