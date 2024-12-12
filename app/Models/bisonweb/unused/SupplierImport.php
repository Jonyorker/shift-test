<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $suppliers_id
 * @property string $file_path
 * @property int $is_first_row_header
 * @property string $column_values
 * @property string $create_date
 * @property string $processed_date
 * @property int $is_processing
 * @property int $records_add
 * @property int $records_skipped
 * @property string $column_keys
 */
class SupplierImport extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Supplier_Import';

    protected $fillable = ['id', 'suppliers_id', 'file_path', 'is_first_row_header', 'column_values', 'create_date', 'processed_date', 'is_processing', 'records_add', 'records_skipped', 'column_keys'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
