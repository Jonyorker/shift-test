<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $mov_number
 * @property int $ltlx_order
 * @property string $image_type
 * @property string $uuid
 * @property string $load_type
 */
class DocktoolImages extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Docktool_Images';

    protected $fillable = ['id', 'mov_number', 'ltlx_order', 'image_type', 'uuid', 'load_type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
