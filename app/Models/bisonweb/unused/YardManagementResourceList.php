<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $yard_management_resource_yard_location_id
 * @property int $yard_management_resource_list_type_id
 * @property int $is_active
 * @property int $sort_order
 * @property int $mandatory_comment
 * @property int $yard_management_resource_action_id
 */
class YardManagementResourceList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Yard_Management_Resource_List';

    protected $fillable = ['id', 'yard_management_resource_yard_location_id', 'yard_management_resource_list_type_id', 'is_active', 'sort_order', 'mandatory_comment', 'yard_management_resource_action_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
