<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type
 * @property string $name
 * @property int $sort
 * @property string $created_date
 */
class CmsDrivingLabels extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Cms_Driving_Labels';

    protected $fillable = ['id', 'type', 'name', 'sort', 'created_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
