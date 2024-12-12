<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $supplier_family_id
 * @property int $suppliers_id
 * @property string $terminal
 * @property string $created_date
 * @property int $is_primary
 * @property int $supplier_shop_id
 * @property float $price
 */
class SupplierContract extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Supplier_Contract';

    protected $fillable = ['id', 'supplier_family_id', 'suppliers_id', 'terminal', 'created_date', 'is_primary', 'supplier_shop_id', 'price'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
