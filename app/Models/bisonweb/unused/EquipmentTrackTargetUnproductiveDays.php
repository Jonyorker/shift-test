<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $start_date
 * @property string $end_date
 * @property int $target
 */
class EquipmentTrackTargetUnproductiveDays extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Equipment_Track_Target_Unproductive_Days';

    protected $fillable = ['id', 'start_date', 'end_date', 'target'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
