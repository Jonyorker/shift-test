<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $bison_carrier_order_id
 * @property string $reference_type
 * @property string $reference_number
 */
class BisonCarrierOrderReference extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Carrier_Order_Reference';

    protected $fillable = ['bison_carrier_order_id', 'reference_type', 'reference_number'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
