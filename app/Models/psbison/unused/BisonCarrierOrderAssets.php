<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $bison_carrier_order_id
 * @property string $asset_type
 * @property string $asset_id
 */
class BisonCarrierOrderAssets extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Carrier_Order_Assets';

    protected $fillable = ['bison_carrier_order_id', 'asset_type', 'asset_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
