<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $efs_expense_carrier_id
 * @property string $efs_money_code
 * @property string $efs_reference_number
 * @property int $po_header_id
 */
class EfsExpenseCarrierMoneyCodes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Efs_Expense_Carrier_Money_Codes';

    protected $fillable = ['id', 'efs_expense_carrier_id', 'efs_money_code', 'efs_reference_number', 'po_header_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
