<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $supply_list_id
 * @property int $supplier_id
 * @property string $requested_date
 * @property string $request_sent
 */
class SupplierListRequestUpdate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Supplier_List_Request_Update';

    protected $fillable = ['id', 'supply_list_id', 'supplier_id', 'requested_date', 'request_sent'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
