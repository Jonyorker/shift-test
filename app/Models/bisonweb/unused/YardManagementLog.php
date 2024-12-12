<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $date_created
 * @property int $yard_management_resource_yard_location_id
 * @property string $equipement_information
 * @property string $emp_id
 * @property int $is_team_work
 * @property string $team_emp_id
 * @property string $comment
 * @property string $shunt_number
 * @property int $from_location_id
 * @property int $to_location_id
 * @property string $quick_check
 * @property float $fuel_litres
 * @property int $edvir_data_id
 * @property string $tmt_import_uuid
 * @property int $out_of_service
 */
class YardManagementLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Yard_Management_Log';

    protected $fillable = ['id', 'date_created', 'yard_management_resource_yard_location_id', 'equipement_information', 'emp_id', 'is_team_work', 'team_emp_id', 'comment', 'shunt_number', 'from_location_id', 'to_location_id', 'quick_check', 'fuel_litres', 'edvir_data_id', 'tmt_import_uuid', 'out_of_service'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
