<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_date
 * @property int $year
 * @property int $week
 * @property string $week_start
 * @property string $week_end
 * @property int $percentage
 */
class EquipmentTrackTrailerProductivity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Equipment_Track_Trailer_Productivity';

    protected $fillable = ['id', 'created_date', 'year', 'week', 'week_start', 'week_end', 'percentage'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
