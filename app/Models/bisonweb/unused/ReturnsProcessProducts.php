<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $case_count
 * @property string $name
 * @property string $codes
 * @property int $returns_process_id
 * @property string $upc
 * @property string $expiry_date
 * @property string $purchase_order_number
 * @property int $skid_count
 * @property string $return_reason
 * @property string $return_reason_other
 */
class ReturnsProcessProducts extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Returns_Process_Products';

    protected $fillable = ['id', 'case_count', 'name', 'codes', 'returns_process_id', 'upc', 'expiry_date', 'purchase_order_number', 'skid_count', 'return_reason', 'return_reason_other'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
