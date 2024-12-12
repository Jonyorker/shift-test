<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $uid
 * @property string $added_date
 * @property string $added_by
 * @property string $modified_date
 * @property string $modified_by
 * @property int $image_uploader_type_id
 * @property string $comments
 * @property string $admin_comments
 * @property int $is_active
 * @property string $purged_date
 * @property int $is_test
 * @property int $is_archived
 * @property int $source
 * @property int $is_autoprocessed
 * @property string $autoprocessed_date
 * @property string $autoprocessed_by
 * @property string $company_id
 */
class ImageUploaderFamily extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Image_Uploader_Family';

    protected $fillable = ['id', 'uid', 'added_date', 'added_by', 'modified_date', 'modified_by', 'image_uploader_type_id', 'comments', 'admin_comments', 'is_active', 'purged_date', 'is_test', 'is_archived', 'source', 'is_autoprocessed', 'autoprocessed_date', 'autoprocessed_by', 'company_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
