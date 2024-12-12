<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $is_test
 * @property string $carrier_id
 * @property int $efs_resources_category_id
 * @property string $gl_code
 * @property int $mov_number
 * @property int $ord_hdrnumber
 * @property int $lgh_number
 * @property string $vendor_name
 * @property string $approved_by
 * @property string $approved_date
 * @property float $approved_amount
 * @property string $approved_amount_unit
 * @property float $efs_amount
 * @property string $efs_reference_number
 * @property string $efs_money_code
 * @property int $efs_processed
 * @property string $efs_processed_date
 * @property string $efs_processed_error
 * @property bool $void_status
 * @property string $void_date
 * @property string $voided_by
 * @property int $efs_resources_rejected_reasons_id
 * @property string $request_uuid
 * @property bool $is_hidden
 * @property string $company_id
 * @property string $bison_po_number
 * @property string $operations_notes
 * @property bool $is_sent
 * @property int $efs_expense_carrier_money_codes
 */
class EfsExpensesCarriers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Efs_Expenses_Carriers';

    protected $fillable = ['id', 'is_test', 'carrier_id', 'efs_resources_category_id', 'gl_code', 'mov_number', 'ord_hdrnumber', 'lgh_number', 'vendor_name', 'approved_by', 'approved_date', 'approved_amount', 'approved_amount_unit', 'efs_amount', 'efs_reference_number', 'efs_money_code', 'efs_processed', 'efs_processed_date', 'efs_processed_error', 'void_status', 'void_date', 'voided_by', 'efs_resources_rejected_reasons_id', 'request_uuid', 'is_hidden', 'company_id', 'bison_po_number', 'operations_notes', 'is_sent', 'efs_expense_carrier_money_codes'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
