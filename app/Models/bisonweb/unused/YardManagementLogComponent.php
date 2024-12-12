<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $yard_management_id
 * @property int $yard_management_resource_component_id
 */
class YardManagementLogComponent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Yard_Management_Log_Component';

    protected $fillable = ['id', 'yard_management_id', 'yard_management_resource_component_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
