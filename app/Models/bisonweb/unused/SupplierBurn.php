<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $item_num
 * @property string $terminal
 * @property string $used_date
 * @property float $quantity
 */
class SupplierBurn extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Supplier_Burn';

    protected $fillable = ['id', 'item_num', 'terminal', 'used_date', 'quantity'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
