<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_date
 * @property float $daily_count
 * @property float $monthly_average
 */
class EquipmentTrackAverageRentalTrailers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Equipment_Track_Average_Rental_Trailers';

    protected $fillable = ['id', 'created_date', 'daily_count', 'monthly_average'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
