<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $CarrierID
 * @property float $Discount
 * @property string $ActivateDate
 * @property int $Inactive
 * @property string $APVendorID
 */
class LgstCarrierDiscount extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Lgst_Carrier_Discount';

    protected $fillable = ['ID', 'CarrierID', 'Discount', 'ActivateDate', 'Inactive', 'APVendorID'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
