<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $created_date
 * @property string $type1
 * @property string $type2
 * @property string $type3
 * @property string $fleet
 * @property string $division
 * @property string $date_range
 * @property string $start_date
 * @property string $end_date
 * @property float $miles
 * @property float $miles_us
 * @property float $miles_lcv
 * @property float $est_working_day
 * @property float $driving_hrs
 * @property float $log_hrs_per_day
 * @property float $pickup_drop
 * @property float $gross_pay
 * @property float $operating_pay
 * @property float $top_avg_miles
 * @property float $top_avg_miles_us
 * @property float $top_avg_miles_lcv
 * @property float $top_avg_est_working_day
 * @property float $top_avg_log_hrs_per_day
 * @property float $top_avg_pickup_drop
 * @property float $top_avg_operating_pay
 * @property float $gross_pay_hr
 * @property float $us
 * @property float $lcv
 * @property float $operating_pay_hr
 * @property float $avg_miles_by_fleet
 * @property float $avg_us_by_fleet
 * @property float $avg_lcv_by_fleet
 * @property float $avg_est_working_day_by_fleet
 * @property float $avg_log_hrs_per_day_by_fleet
 * @property float $avg_pickup_drop_by_fleet
 * @property float $avg_operating_pay_by_fleet
 * @property string $region
 * @property float $avg_miles_by_region
 * @property float $avg_us_by_region
 * @property float $avg_lcv_by_region
 * @property float $avg_est_working_day_by_region
 * @property float $avg_log_hrs_per_day_by_region
 * @property float $avg_pickup_drop_by_region
 * @property float $avg_operating_pay_by_region
 * @property float $top_avg_operating_pay_hr
 * @property float $avg_operating_pay_hr_by_fleet
 * @property float $avg_operating_pay_hr_by_region
 */
class ScorecardUtilizationDriver extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Scorecard_Utilization_Driver';

    protected $fillable = ['id', 'emp_id', 'created_date', 'type1', 'type2', 'type3', 'fleet', 'division', 'date_range', 'start_date', 'end_date', 'miles', 'miles_us', 'miles_lcv', 'est_working_day', 'driving_hrs', 'log_hrs_per_day', 'pickup_drop', 'gross_pay', 'operating_pay', 'top_avg_miles', 'top_avg_miles_us', 'top_avg_miles_lcv', 'top_avg_est_working_day', 'top_avg_log_hrs_per_day', 'top_avg_pickup_drop', 'top_avg_operating_pay', 'gross_pay_hr', 'us', 'lcv', 'operating_pay_hr', 'avg_miles_by_fleet', 'avg_us_by_fleet', 'avg_lcv_by_fleet', 'avg_est_working_day_by_fleet', 'avg_log_hrs_per_day_by_fleet', 'avg_pickup_drop_by_fleet', 'avg_operating_pay_by_fleet', 'region', 'avg_miles_by_region', 'avg_us_by_region', 'avg_lcv_by_region', 'avg_est_working_day_by_region', 'avg_log_hrs_per_day_by_region', 'avg_pickup_drop_by_region', 'avg_operating_pay_by_region', 'top_avg_operating_pay_hr', 'avg_operating_pay_hr_by_fleet', 'avg_operating_pay_hr_by_region'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
