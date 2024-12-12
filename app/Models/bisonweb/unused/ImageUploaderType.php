<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $label
 * @property string $value
 * @property int $sort_order
 * @property int $is_active
 * @property int $folder_code
 * @property string $route
 * @property string $admin_dept_name
 * @property int $is_uploadable
 * @property string $initial_complete_status
 * @property string $purge_date
 * @property string $monitored_email
 * @property int $is_dashboard
 */
class ImageUploaderType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Image_Uploader_Type';

    protected $fillable = ['id', 'label', 'value', 'sort_order', 'is_active', 'folder_code', 'route', 'admin_dept_name', 'is_uploadable', 'initial_complete_status', 'purge_date', 'monitored_email', 'is_dashboard'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
