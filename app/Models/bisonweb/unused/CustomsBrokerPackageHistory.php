<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $file_uuid
 * @property string $date_received
 * @property string $status
 * @property int $move_number
 * @property int $order_number
 * @property string $created_by
 * @property string $date_sent
 * @property string $date_confirmed
 * @property string $date_warning_sent
 * @property int $broker_tracing_rpa_status
 * @property string $rpa_result
 * @property int $rpa_result_count
 * @property string $date_rpa_last_check
 * @property int $fax_tracking_id
 * @property string $broker_send_date
 * @property int $broker_id
 * @property string $broker_name
 * @property string $broker_fax
 * @property string $broker_loc
 * @property string $broker_email
 * @property string $tractor
 * @property string $tractor_license
 * @property string $trailer
 * @property string $trailer_license
 * @property string $target_clearance_time
 * @property string $ace_status
 * @property string $assigned_to
 * @property string $delv_instruction
 * @property int $priority
 * @property bool $actioned
 * @property string $lgh_driver
 * @property int $rpa_manifest_status
 * @property string $updated_by
 * @property string $updated_date
 * @property int $customs_broker_package_id
 */
class CustomsBrokerPackageHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Customs_Broker_Package_History';

    protected $fillable = ['id', 'file_uuid', 'date_received', 'status', 'move_number', 'order_number', 'created_by', 'date_sent', 'date_confirmed', 'date_warning_sent', 'broker_tracing_rpa_status', 'rpa_result', 'rpa_result_count', 'date_rpa_last_check', 'fax_tracking_id', 'broker_send_date', 'broker_id', 'broker_name', 'broker_fax', 'broker_loc', 'broker_email', 'tractor', 'tractor_license', 'trailer', 'trailer_license', 'target_clearance_time', 'ace_status', 'assigned_to', 'delv_instruction', 'priority', 'actioned', 'lgh_driver', 'rpa_manifest_status', 'updated_by', 'updated_date', 'customs_broker_package_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
