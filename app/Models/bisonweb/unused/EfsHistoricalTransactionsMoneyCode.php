<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $added_date
 * @property string $money_code
 * @property string $created_date
 * @property string $created_by
 * @property string $issued_to
 * @property int $efs_card_id
 * @property float $amount
 * @property float $amount_used
 * @property string $notes
 * @property string $payee
 * @property int $is_voided
 * @property string $void_date
 * @property int $is_test
 * @property int $efs_id
 * @property string $company_id
 * @property string $first_used_date
 * @property int $times_used
 */
class EfsHistoricalTransactionsMoneyCode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Efs_Historical_Transactions_Money_Code';

    protected $fillable = ['id', 'added_date', 'money_code', 'created_date', 'created_by', 'issued_to', 'efs_card_id', 'amount', 'amount_used', 'notes', 'payee', 'is_voided', 'void_date', 'is_test', 'efs_id', 'company_id', 'first_used_date', 'times_used'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
