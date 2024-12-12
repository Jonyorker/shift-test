<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $status
 * @property string $description
 * @property int $priority
 */
class ImageUploaderStatuses extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Image_Uploader_Statuses';

    protected $fillable = ['id', 'status', 'description', 'priority'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
