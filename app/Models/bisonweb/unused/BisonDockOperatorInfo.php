<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $order_number
 * @property int $move_number
 * @property string $activity_type
 * @property string $operator_code
 * @property string $start_trl_number
 * @property string $end_trl_number
 * @property string $dock
 * @property string $seal_number
 * @property int $skid_count
 * @property string $bill_to
 * @property int $staged
 * @property string $start_time
 * @property string $end_time
 * @property string $created_date
 * @property string $created_by
 * @property int $total_time_in_minutes
 * @property string $carrier_id
 * @property string $notes
 * @property int $po_number
 */
class BisonDockOperatorInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Dock_Operator_Info';

    protected $fillable = ['order_number', 'move_number', 'activity_type', 'operator_code', 'start_trl_number', 'end_trl_number', 'dock', 'seal_number', 'skid_count', 'bill_to', 'staged', 'start_time', 'end_time', 'created_date', 'created_by', 'total_time_in_minutes', 'carrier_id', 'notes', 'po_number'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
