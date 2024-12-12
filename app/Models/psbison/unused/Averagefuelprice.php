<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $afp_tableid
 * @property string $afp_date
 * @property string $afp_description
 * @property int $afp_price
 * @property string $afp_default
 * @property string $afp_BelongsTo
 * @property int $rowsec_rsrv_id
 * @property string $afp_revtype1
 * @property int $afp_id
 * @property int $afp_AppliedToBillingTariff
 * @property int $afp_AppliedToSettlementTariff
 * @property int $afp_IsFormula
 * @property string $afp_IsProcessed
 * @property string $INS_TIMESTAMP
 * @property mixed $DW_TIMESTAMP
 */
class Averagefuelprice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Averagefuelprice';

    protected $fillable = ['afp_description', 'afp_price', 'afp_default', 'afp_BelongsTo', 'rowsec_rsrv_id', 'afp_revtype1', 'afp_id', 'afp_AppliedToBillingTariff', 'afp_AppliedToSettlementTariff', 'afp_IsFormula', 'afp_IsProcessed', 'INS_TIMESTAMP', 'DW_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
