<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $yard_management_id
 * @property string $unit_number
 * @property string $unit_type
 */
class YardManagementLogEquipment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Yard_Management_Log_Equipment';

    protected $fillable = ['id', 'yard_management_id', 'unit_number', 'unit_type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
