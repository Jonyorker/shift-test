<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $startregion3
 * @property string $endregion3
 * @property string $billto
 * @property string $shipper
 * @property string $receiver
 * @property int $targetrate
 * @property int $maxrate
 * @property int $waterfallhrs
 * @property int $reverseauctionhrs
 * @property int $accepttime
 * @property int $rateweight
 * @property int $scorecardweight
 * @property int $podratingweight
 * @property int $excludelane
 * @property string $effectivedate
 * @property string $enddate
 * @property string $startbusinesshr
 * @property string $endbusinesshr
 * @property string $ablpod
 */
class LgstAutotenderrules extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Lgst_Autotenderrules';

    protected $fillable = ['id', 'startregion3', 'endregion3', 'billto', 'shipper', 'receiver', 'targetrate', 'maxrate', 'waterfallhrs', 'reverseauctionhrs', 'accepttime', 'rateweight', 'scorecardweight', 'podratingweight', 'excludelane', 'effectivedate', 'enddate', 'startbusinesshr', 'endbusinesshr', 'ablpod'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
