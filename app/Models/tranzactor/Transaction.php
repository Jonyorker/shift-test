<?php

namespace App\Models\tranzactor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * @property int $OID
 * @property int $Batch
 * @property string $Content
 * @property string $ControlNumber
 * @property string $DateTime
 * @property string $SentDateTime
 * @property string $Destination
 * @property int $Direction
 * @property string $DocumentType
 * @property string $DocumentSubType
 * @property string $FileName
 * @property string $Receiver
 * @property string $Sender
 * @property string $Source
 * @property int $TransactionHold
 * @property string $TransactionSource
 * @property int $TransactionStatus
 * @property int $OptimisticLockField
 * @property int $GCRecord
 * @property int $RetryCount
 */
class Transaction extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transaction';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'OID';

    protected $fillable = ['Batch', 'Content', 'ControlNumber', 'DateTime', 'SentDateTime', 'Destination', 'Direction', 'DocumentType', 'DocumentSubType', 'FileName', 'Receiver', 'Sender', 'Source', 'TransactionHold', 'TransactionSource', 'TransactionStatus', 'OptimisticLockField', 'GCRecord', 'RetryCount'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'tranzactor';

    // Methods

    /**
     * @return Collection<int, Transaction>
     */
    public function batch_process(int $offset = 2300): Collection
    {
        return $this::where('OID', '>=', $offset)
            ->where('Destination', 'PlatSci_Inbound')
            ->where('DocumentType', 'MobileComFormMessage')
            ->where('Direction', 1)
            ->get();
    }
}
