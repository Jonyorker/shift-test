<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $parent_id
 * @property string $created_by
 * @property string $created_date
 * @property string $activity_date
 * @property string $activity_type
 * @property int $mov_number
 * @property string $primary_driver_id
 * @property string $primary_contact
 * @property string $secondary_driver_id
 * @property string $secondary_contact
 * @property string $company_id
 * @property string $company_name
 * @property string $contact_type
 * @property string $unit_number
 * @property string $license_plate
 * @property string $yard_violation
 * @property int $has_ppe
 * @property int $has_equipment_damage
 * @property string $equipment_damage
 * @property string $yard_id
 * @property string $scheduled_entry_date
 * @property string $scheduled_exit_date
 * @property string $added_date
 * @property string $comments
 * @property int $lgh_number
 */
class YardMonitorHistorical extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Yard_Monitor_Historical';

    protected $fillable = ['id', 'parent_id', 'created_by', 'created_date', 'activity_date', 'activity_type', 'mov_number', 'primary_driver_id', 'primary_contact', 'secondary_driver_id', 'secondary_contact', 'company_id', 'company_name', 'contact_type', 'unit_number', 'license_plate', 'yard_violation', 'has_ppe', 'has_equipment_damage', 'equipment_damage', 'yard_id', 'scheduled_entry_date', 'scheduled_exit_date', 'added_date', 'comments', 'lgh_number'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
