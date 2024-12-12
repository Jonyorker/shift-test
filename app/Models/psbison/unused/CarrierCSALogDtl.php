<?php

namespace App\Models\psbison\unused;

use App\Models\CarrierCSA;
use App\Models\CarrierCSALogHdr;
use Illuminate\Database\Eloquent\Model;

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carrierCSAs()
    {
        return $this->hasMany('App\Models\CarrierCSA', 'carriercsalogdtl_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carrierCSALogHdr()
    {
        return $this->belongsTo('App\Models\CarrierCSALogHdr');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expirations()
    {
        return $this->hasMany(\App\Models\psbison\unused\Expiration::class, 'carriercsalogdtl_id');
    }
}
