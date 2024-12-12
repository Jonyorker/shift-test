<?php

namespace App\Models\psbison\unused;

use App\Models\CarrierCSA;
use App\Models\CarrierCSALogHdr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $CarrierCSALogHdr_id
 * @property string $docket
 * @property string $comments
 * @property string $lastupdatedate
 * @property string $lastupdateuser
 * @property CarrierCSA[] $carrierCSAs
 * @property CarrierCSALogHdr $carrierCSALogHdr
 * @property Expiration[] $expirations
 */
class CarrierCSALogDtl extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'CarrierCSALogDtl';

    protected $fillable = ['CarrierCSALogHdr_id', 'docket', 'comments', 'lastupdatedate', 'lastupdateuser'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';

    public function carrierCSAs(): HasMany
    {
        return $this->hasMany('App\Models\CarrierCSA', 'carriercsalogdtl_id');
    }

    public function carrierCSALogHdr(): BelongsTo
    {
        return $this->belongsTo('App\Models\CarrierCSALogHdr');
    }

    public function expirations(): HasMany
    {
        return $this->hasMany(\App\Models\psbison\unused\Expiration::class, 'carriercsalogdtl_id');
    }
}
