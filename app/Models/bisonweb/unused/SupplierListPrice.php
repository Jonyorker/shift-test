<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $family_id
 * @property float $price
 * @property string $create_date
 * @property string $expire_date
 * @property int $suppliers_id
 * @property int $supply_list_id
 */
class SupplierListPrice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Supplier_List_Price';

    protected $fillable = ['id', 'family_id', 'price', 'create_date', 'expire_date', 'suppliers_id', 'supply_list_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
