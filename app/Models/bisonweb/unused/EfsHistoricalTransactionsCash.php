<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $added_date
 * @property int $efs_card_id
 * @property float $amount
 * @property string $created_date
 * @property string $created_by
 * @property string $cash_id
 * @property string $cash_label
 * @property string $reference_number
 * @property int $transaction_id
 */
class EfsHistoricalTransactionsCash extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Efs_Historical_Transactions_Cash';

    protected $fillable = ['id', 'added_date', 'efs_card_id', 'amount', 'created_date', 'created_by', 'cash_id', 'cash_label', 'reference_number', 'transaction_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
