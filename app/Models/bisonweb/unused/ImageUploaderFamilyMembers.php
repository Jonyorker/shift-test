<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $image_id
 * @property int $family_id
 * @property string $status
 * @property int $page_number
 * @property int $rotation_degree
 * @property int $imagelookup_id
 * @property int $rejected_reason_id
 */
class ImageUploaderFamilyMembers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Image_Uploader_Family_Members';

    protected $fillable = ['id', 'image_id', 'family_id', 'status', 'page_number', 'rotation_degree', 'imagelookup_id', 'rejected_reason_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
