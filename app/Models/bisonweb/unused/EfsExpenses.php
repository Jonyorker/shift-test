<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $is_test
 * @property int $efs_card_id
 * @property string $created_date
 * @property string $fleet
 * @property int $efs_resources_category_id
 * @property string $gl_code
 * @property string $expense_date
 * @property int $efs_resources_expense_type_id
 * @property int $mov_number
 * @property string $po_number
 * @property int $request_express_code
 * @property string $vendor_name
 * @property string $image_uploader_family_uid
 * @property int $request_type
 * @property string $requested_by
 * @property string $requested_date
 * @property float $requested_amount
 * @property string $requested_amount_unit
 * @property int $requested_status
 * @property string $approved_by
 * @property string $approved_date
 * @property float $approved_amount
 * @property string $approved_amount_unit
 * @property float $approved_gst
 * @property int $approved_status
 * @property float $exchange_rate
 * @property float $efs_amount
 * @property string $efs_reference_number
 * @property string $efs_money_code
 * @property int $efs_processed
 * @property string $efs_processed_date
 * @property string $efs_processed_error
 * @property bool $void_status
 * @property string $void_date
 * @property string $voided_by
 * @property int $order_number
 * @property string $invoice_number
 * @property string $private_comments
 * @property string $bison_po_number
 * @property int $efs_resources_rejected_reasons_id
 * @property string $request_uuid
 * @property bool $is_hidden
 * @property bool $reimburse_type
 * @property int $stp_number
 * @property int $cr_num
 * @property string $driver_comment
 * @property string $operations_notes
 */
class EfsExpenses extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Efs_Expenses';

    protected $fillable = ['id', 'is_test', 'efs_card_id', 'created_date', 'fleet', 'efs_resources_category_id', 'gl_code', 'expense_date', 'efs_resources_expense_type_id', 'mov_number', 'po_number', 'request_express_code', 'vendor_name', 'image_uploader_family_uid', 'request_type', 'requested_by', 'requested_date', 'requested_amount', 'requested_amount_unit', 'requested_status', 'approved_by', 'approved_date', 'approved_amount', 'approved_amount_unit', 'approved_gst', 'approved_status', 'exchange_rate', 'efs_amount', 'efs_reference_number', 'efs_money_code', 'efs_processed', 'efs_processed_date', 'efs_processed_error', 'void_status', 'void_date', 'voided_by', 'order_number', 'invoice_number', 'private_comments', 'bison_po_number', 'efs_resources_rejected_reasons_id', 'request_uuid', 'is_hidden', 'reimburse_type', 'stp_number', 'cr_num', 'driver_comment', 'operations_notes'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
