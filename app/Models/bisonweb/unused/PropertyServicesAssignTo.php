<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $property_services_locations_id
 * @property int $property_services_resources_id
 * @property string $emp_id
 * @property string $type
 */
class PropertyServicesAssignTo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Property_Services_Assign_To';

    protected $fillable = ['id', 'property_services_locations_id', 'property_services_resources_id', 'emp_id', 'type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
