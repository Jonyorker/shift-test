<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $mov_number
 * @property int $lgh_number
 * @property int $stp_number
 * @property string $stp_event
 * @property string $stp_type
 * @property string $lgh_startdate
 * @property string $lgh_enddate
 * @property string $lgh_driver1
 * @property string $lgh_driver2
 * @property int $image_upload_family_id
 * @property int $image_upload_member_id
 * @property string $image_upload_emp_id
 * @property int $image_upload_stp_number
 * @property int $image_type_id
 * @property string $created_date
 * @property string $updated_date
 * @property string $lgh_carrier
 * @property int $ord_hdrnumber
 */
class ImageUploadDriverScore extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Image_Upload_Driver_Score';

    protected $fillable = ['id', 'mov_number', 'lgh_number', 'stp_number', 'stp_event', 'stp_type', 'lgh_startdate', 'lgh_enddate', 'lgh_driver1', 'lgh_driver2', 'image_upload_family_id', 'image_upload_member_id', 'image_upload_emp_id', 'image_upload_stp_number', 'image_type_id', 'created_date', 'updated_date', 'lgh_carrier', 'ord_hdrnumber'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
