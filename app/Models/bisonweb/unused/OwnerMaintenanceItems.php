<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $maintenance_record_id
 * @property string $description
 * @property string $odometer
 * @property string $invoice
 * @property string $date
 * @property string $completed_by
 * @property string $po_number
 */
class OwnerMaintenanceItems extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Owner_Maintenance_Items';

    protected $fillable = ['id', 'maintenance_record_id', 'description', 'odometer', 'invoice', 'date', 'completed_by', 'po_number'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
