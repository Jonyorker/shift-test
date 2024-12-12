<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $item_num
 * @property string $description
 * @property string $category
 * @property string $manufacturer
 * @property string $proprietary
 * @property float $std_cost
 * @property string $vmrs
 * @property int $active
 * @property string $stocked
 */
class SupplierListShop extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Supplier_List_Shop';

    protected $fillable = ['id', 'item_num', 'description', 'category', 'manufacturer', 'proprietary', 'std_cost', 'vmrs', 'active', 'stocked'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
