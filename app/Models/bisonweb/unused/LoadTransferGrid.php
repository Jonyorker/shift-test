<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $worksheet
 * @property string $order_num
 * @property string $old_trailer_num
 * @property string $arrival_time
 * @property string $new_trailer_num
 * @property string $comment
 * @property string $departure_time
 * @property string $new_seal_num
 * @property int $transfer_completed
 * @property string $update_date
 * @property string $update_userid
 * @property string $carrier
 * @property string $customer
 * @property string $arrival_type
 * @property string $terminal
 * @property string $new_carrier
 * @property string $shunt_code
 * @property int $priority
 * @property string $created_by_userid
 * @property string $created_on
 * @property int $space_remaining
 * @property int $is_active
 * @property string $deactivated_by
 * @property string $attachment_url
 * @property int $space_used
 * @property string $activity_type
 */
class LoadTransferGrid extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Load_Transfer_Grid';

    protected $fillable = ['id', 'worksheet', 'order_num', 'old_trailer_num', 'arrival_time', 'new_trailer_num', 'comment', 'departure_time', 'new_seal_num', 'transfer_completed', 'update_date', 'update_userid', 'carrier', 'customer', 'arrival_type', 'terminal', 'new_carrier', 'shunt_code', 'priority', 'created_by_userid', 'created_on', 'space_remaining', 'is_active', 'deactivated_by', 'attachment_url', 'space_used', 'activity_type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
