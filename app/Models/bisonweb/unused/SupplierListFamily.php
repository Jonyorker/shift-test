<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $suppliers_id
 * @property int $supply_list_id
 * @property string $supplier_part_num
 * @property int $is_alt
 * @property string $description
 */
class SupplierListFamily extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Supplier_List_Family';

    protected $fillable = ['id', 'suppliers_id', 'supply_list_id', 'supplier_part_num', 'is_alt', 'description'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
