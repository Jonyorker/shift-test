<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_date
 * @property int $unproductive_days
 * @property int $grand_total_of_loads
 * @property float $overall_average_of_unproductive_days
 */
class EquipmentTrackAverageUnproductiveDays extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Equipment_Track_Average_Unproductive_Days';

    protected $fillable = ['id', 'created_date', 'unproductive_days', 'grand_total_of_loads', 'overall_average_of_unproductive_days'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
