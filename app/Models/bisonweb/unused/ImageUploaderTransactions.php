<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $name
 * @property string $uid
 * @property string $image_uploader_type_id
 * @property string $comments
 * @property string $move_number
 * @property string $page_number
 * @property string $created_date
 * @property string $pages
 * @property string $is_test
 * @property string $rotation_degree
 * @property string $stp_number
 * @property string $no_alert
 * @property string $source
 * @property string $detection_result
 * @property string $app_version
 * @property string $cmp_id
 * @property string $cmp_name
 * @property string $keys
 * @property string $post_data
 * @property string $post_md5
 * @property int $post_count
 * @property string $status
 * @property string $pars_paps_numbers
 * @property string $agr_number
 */
class ImageUploaderTransactions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Image_Uploader_Transactions';

    protected $fillable = ['id', 'emp_id', 'name', 'uid', 'image_uploader_type_id', 'comments', 'move_number', 'page_number', 'created_date', 'pages', 'is_test', 'rotation_degree', 'stp_number', 'no_alert', 'source', 'detection_result', 'app_version', 'cmp_id', 'cmp_name', 'keys', 'post_data', 'post_md5', 'post_count', 'status', 'pars_paps_numbers', 'agr_number'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
