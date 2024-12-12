<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $lgh_number
 * @property int $ord_number
 * @property float $ABL_cost
 * @property float $ABL_revshare
 * @property float $ABL_adj
 * @property string $ABL_rules
 * @property string $ABL_carrier
 * @property float $ABL_exch
 * @property int $ABL_miles
 * @property int $rate_ID
 */
class LgstRev extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Lgst_Rev';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'lgh_number';

    protected $fillable = ['ord_number', 'ABL_cost', 'ABL_revshare', 'ABL_adj', 'ABL_rules', 'ABL_carrier', 'ABL_exch', 'ABL_miles', 'rate_ID'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
