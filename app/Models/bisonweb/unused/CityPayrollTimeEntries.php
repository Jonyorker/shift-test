<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $tractor_id
 * @property string $ip_address
 * @property string $created_date
 * @property string $shift_date
 * @property string $start_hours
 * @property string $start_lunch_hours
 * @property string $end_lunch_hours
 * @property string $end_hours
 * @property string $total_hours_excluding_lunch
 * @property int $is_reviewed
 * @property string $reviewed_by
 * @property string $reviewed_date
 * @property string $fleet
 */
class CityPayrollTimeEntries extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'City_Payroll_Time_Entries';

    protected $fillable = ['id', 'emp_id', 'tractor_id', 'ip_address', 'created_date', 'shift_date', 'start_hours', 'start_lunch_hours', 'end_lunch_hours', 'end_hours', 'total_hours_excluding_lunch', 'is_reviewed', 'reviewed_by', 'reviewed_date', 'fleet'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
