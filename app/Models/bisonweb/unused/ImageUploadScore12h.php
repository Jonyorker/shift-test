<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $driver_id
 * @property string $fleet
 * @property string $driver_type
 * @property int $total_moves
 * @property int $total_stops
 * @property int $total_uploads
 * @property float $upload_score
 */
class ImageUploadScore12h extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Image_Upload_Score_12h';

    protected $fillable = ['driver_id', 'fleet', 'driver_type', 'total_moves', 'total_stops', 'total_uploads', 'upload_score'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
