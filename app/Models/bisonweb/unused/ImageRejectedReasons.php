<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $reason
 * @property int $is_active
 * @property int $is_visible
 */
class ImageRejectedReasons extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Image_Rejected_Reasons';

    protected $fillable = ['id', 'reason', 'is_active', 'is_visible'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
