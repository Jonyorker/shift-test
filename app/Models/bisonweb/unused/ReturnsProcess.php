<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $processed_by
 * @property string $inbound_date
 * @property string $receiver
 * @property int $shipper_order_number
 * @property string $account_csr
 * @property string $product_location
 * @property string $trailer_id
 * @property string $shipper
 * @property string $temperature
 * @property string $return_reason
 * @property string $outbound_status
 * @property string $outbound_date
 * @property string $disposition
 * @property int $return_order_number
 * @property string $closed_by
 * @property string $billable
 * @property int $cost_recovery_number
 * @property int $stop_number
 * @property string $product_description_notes
 * @property string $stp_event
 * @property string $last_updated
 * @property int $sent_to_csr
 * @property string $created_date
 * @property string $return_to_bison_order_number
 * @property string $return_reason_other
 * @property string $purchase_order_number
 * @property int $supervisor_reviewed
 * @property string $storage_trailer
 * @property string $dock_status
 * @property string $charge_method
 * @property string $dock_location
 * @property string $customer_reference_number
 */
class ReturnsProcess extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Returns_Process';

    protected $fillable = ['id', 'processed_by', 'inbound_date', 'receiver', 'shipper_order_number', 'account_csr', 'product_location', 'trailer_id', 'shipper', 'temperature', 'return_reason', 'outbound_status', 'outbound_date', 'disposition', 'return_order_number', 'closed_by', 'billable', 'cost_recovery_number', 'stop_number', 'product_description_notes', 'stp_event', 'last_updated', 'sent_to_csr', 'created_date', 'return_to_bison_order_number', 'return_reason_other', 'purchase_order_number', 'supervisor_reviewed', 'storage_trailer', 'dock_status', 'charge_method', 'dock_location', 'customer_reference_number'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
