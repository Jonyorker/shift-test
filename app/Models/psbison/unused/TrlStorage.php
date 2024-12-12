<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\TrlStorageContact;
use App\Models\TrlStorageInvoiceHistory;
use App\Models\TrlStorageStatus;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $tstg_id
 * @property int $stp_number
 * @property string $trl_id
 * @property int $ord_hdrnumber
 * @property string $tstg_startdate
 * @property bool $tstg_billable
 * @property string $tstg_bill_cmp
 * @property string $tstg_enddate
 * @property int $TrlStorageStatusId
 * @property string $tstg_comments
 * @property string $tstg_lastbilldate
 * @property string $CreatedBy
 * @property string $CreatedDate
 * @property string $LastUpdatedBy
 * @property string $LastUpdatedDate
 * @property string $StorageCompanyId
 * @property int $BillToFreeDays
 * @property int $Rate
 * @property int $ivh_hdrnumber
 * @property bool $FreeDaysUsed
 * @property Stops $stop
 * @property TrlStorageStatus $trlStorageStatus
 * @property TrlStorageContact[] $trlStorageContacts
 * @property TrlStorageInvoiceHistory[] $trlStorageInvoiceHistories
 * @property Expiration[] $expirations
 */
class TrlStorage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TrlStorage';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'tstg_id';

    protected $fillable = ['stp_number', 'trl_id', 'ord_hdrnumber', 'tstg_startdate', 'tstg_billable', 'tstg_bill_cmp', 'tstg_enddate', 'TrlStorageStatusId', 'tstg_comments', 'tstg_lastbilldate', 'CreatedBy', 'CreatedDate', 'LastUpdatedBy', 'LastUpdatedDate', 'StorageCompanyId', 'BillToFreeDays', 'Rate', 'ivh_hdrnumber', 'FreeDaysUsed'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stop(): BelongsTo
    {
        return $this->belongsTo('App\Models\psbison\unused\Stops', 'stp_number', 'stp_number');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trlStorageStatus(): BelongsTo
    {
        return $this->belongsTo('App\Models\TrlStorageStatus', 'TrlStorageStatusId', 'TrlStorageStatusId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trlStorageContacts(): HasMany
    {
        return $this->hasMany('App\Models\TrlStorageContact', 'TrlStorageId', 'tstg_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trlStorageInvoiceHistories(): HasMany
    {
        return $this->hasMany('App\Models\TrlStorageInvoiceHistory', 'TrailerStorageId', 'tstg_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expirations(): HasMany
    {
        return $this->hasMany(\App\Models\psbison\unused\Expiration::class, 'trlStgID', 'tstg_id');
    }
}
