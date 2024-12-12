<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $base_gl
 * @property int $is_active
 * @property int $folder_filecode
 * @property string $company_id
 * @property string $driver_type
 * @property float $auto_process_limit
 * @property bool $is_carrier
 */
class EfsResourcesCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Efs_Resources_Category';

    protected $fillable = ['id', 'name', 'base_gl', 'is_active', 'folder_filecode', 'company_id', 'driver_type', 'auto_process_limit', 'is_carrier'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
