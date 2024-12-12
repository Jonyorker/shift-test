<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $employee_id
 * @property string $ip_address
 * @property int $site_notification_id
 * @property string $created_date
 */
class SiteNotificationPostData extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Site_Notification_Post_Data';

    protected $fillable = ['id', 'employee_id', 'ip_address', 'site_notification_id', 'created_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
