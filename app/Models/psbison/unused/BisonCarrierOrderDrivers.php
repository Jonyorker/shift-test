<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $bison_carrier_order_id
 * @property string $driver_id
 */
class BisonCarrierOrderDrivers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Carrier_Order_Drivers';

    protected $fillable = ['bison_carrier_order_id', 'driver_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
