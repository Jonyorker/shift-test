<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $script_run_date
 * @property int $arrivaldate_unix_range_start
 * @property int $arrivaldate_unix_range_end
 * @property int $ord_hdrnumber
 * @property int $mov_number
 * @property int $lgh_number
 * @property int $stp_number
 * @property string $stop_event
 * @property int $stp_arrivaldate_unix
 * @property string $stp_arrivaldate
 * @property string $required_image
 * @property string $driver
 * @property string $alert_uuid
 * @property string $existing_family_uuid
 * @property int $alert_sent_this_run
 * @property string $alert_message
 * @property string $skip_reason
 */
class ImageUploaderNotificationsTracking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Image_Uploader_Notifications_Tracking';

    protected $fillable = ['id', 'script_run_date', 'arrivaldate_unix_range_start', 'arrivaldate_unix_range_end', 'ord_hdrnumber', 'mov_number', 'lgh_number', 'stp_number', 'stop_event', 'stp_arrivaldate_unix', 'stp_arrivaldate', 'required_image', 'driver', 'alert_uuid', 'existing_family_uuid', 'alert_sent_this_run', 'alert_message', 'skip_reason'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
