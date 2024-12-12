<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $employee_id
 * @property string $time_frame
 * @property string $created_date
 * @property string $fleet
 * @property string $region
 * @property int $engine_time
 * @property int $miles
 * @property float $mpg
 * @property float $short_idle
 * @property float $extended_idle
 * @property float $over_rpm
 * @property float $cruise
 * @property float $extra_cpl
 * @property float $fleet_avg_extra_cpl
 * @property float $region_avg_extra_cpl
 * @property int $fleet_rank_mpg
 * @property int $fleet_rank_short_idle
 * @property int $fleet_rank_extended_idle
 * @property int $fleet_rank_over_rpm
 * @property int $fleet_rank_cruise
 * @property int $fleet_rank_extra_cpl
 * @property float $fleet_weighted_score
 * @property int $fleet_final_rank
 * @property int $region_rank_mpg
 * @property int $region_rank_short_idle
 * @property int $region_rank_extended_idle
 * @property int $region_rank_over_rpm
 * @property int $region_rank_cruise
 * @property int $region_rank_extra_cpl
 * @property float $region_weighted_score
 * @property int $region_final_rank
 * @property string $driver_type
 */
class FuelPerformanceRankDetails extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Fuel_Performance_Rank_Details';

    protected $fillable = ['id', 'employee_id', 'time_frame', 'created_date', 'fleet', 'region', 'engine_time', 'miles', 'mpg', 'short_idle', 'extended_idle', 'over_rpm', 'cruise', 'extra_cpl', 'fleet_avg_extra_cpl', 'region_avg_extra_cpl', 'fleet_rank_mpg', 'fleet_rank_short_idle', 'fleet_rank_extended_idle', 'fleet_rank_over_rpm', 'fleet_rank_cruise', 'fleet_rank_extra_cpl', 'fleet_weighted_score', 'fleet_final_rank', 'region_rank_mpg', 'region_rank_short_idle', 'region_rank_extended_idle', 'region_rank_over_rpm', 'region_rank_cruise', 'region_rank_extra_cpl', 'region_weighted_score', 'region_final_rank', 'driver_type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
