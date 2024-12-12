<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $profile
 * @property string $emp_id
 * @property string $modified_date
 * @property int $is_active
 * @property string $intro
 * @property string $image
 * @property string $image_data
 * @property int $sort_order
 */
class CmsDrivingPositions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Cms_Driving_Positions';

    protected $fillable = ['id', 'title', 'profile', 'emp_id', 'modified_date', 'is_active', 'intro', 'image', 'image_data', 'sort_order'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
