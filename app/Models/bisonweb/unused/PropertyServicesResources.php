<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $label_name
 */
class PropertyServicesResources extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Property_Services_Resources';

    protected $fillable = ['id', 'label_name'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
