<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $uid
 * @property string $ip_address
 * @property string $emp_id
 * @property string $created_date
 * @property string $added_date
 * @property string $modified_date
 * @property string $modified_by
 * @property string $name
 * @property string $url
 * @property int $file_size_in_bytes
 * @property string $current_md5
 * @property int $is_active
 */
class ImageUploaderImages extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Image_Uploader_Images';

    protected $fillable = ['id', 'uid', 'ip_address', 'emp_id', 'created_date', 'added_date', 'modified_date', 'modified_by', 'name', 'url', 'file_size_in_bytes', 'current_md5', 'is_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
