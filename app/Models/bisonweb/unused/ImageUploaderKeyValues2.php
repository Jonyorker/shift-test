<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $key_code
 * @property string $type
 * @property string $string_value
 * @property string $datetime_value
 * @property int $type_id
 * @property string $parent_type
 */
class ImageUploaderKeyValues2 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Image_Uploader_Key_Values_2';

    protected $fillable = ['id', 'key_code', 'type', 'string_value', 'datetime_value', 'type_id', 'parent_type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
