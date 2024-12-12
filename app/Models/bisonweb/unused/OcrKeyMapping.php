<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $key_id
 * @property string $key_desc
 * @property string $key_text
 * @property string $key_type
 */
class OcrKeyMapping extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Ocr_Key_Mapping';

    protected $fillable = ['id', 'key_id', 'key_desc', 'key_text', 'key_type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
