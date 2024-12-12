<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $mpp_id
 * @property string $log_date
 * @property int $total_miles
 * @property string $log
 * @property float $off_duty_hrs
 * @property float $sleeper_berth_hrs
 * @property float $driving_hrs
 * @property float $on_duty_hrs
 * @property string $processed_flag
 * @property string $log_reset
 * @property int $log_resetkind
 * @property string $rule_reset_indc
 * @property float $eleven_hr_rule
 * @property float $fourteen_hr_rule
 * @property float $sixty_seventy_hr_rule
 * @property string $last_avail_hrs_recalc
 * @property string $rule_reset_date
 * @property string $rule_est_reset_date
 * @property int $log_driverlog_ID
 * @property bool $skip_trigger
 * @property string $INS_TIMESTAMP
 * @property mixed $DW_TIMESTAMP
 */
class LogDriverLogs extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Log_DriverLogs';

    protected $fillable = ['mpp_id', 'log_date', 'total_miles', 'log', 'off_duty_hrs', 'sleeper_berth_hrs', 'driving_hrs', 'on_duty_hrs', 'processed_flag', 'log_reset', 'log_resetkind', 'rule_reset_indc', 'eleven_hr_rule', 'fourteen_hr_rule', 'sixty_seventy_hr_rule', 'last_avail_hrs_recalc', 'rule_reset_date', 'rule_est_reset_date', 'log_driverlog_ID', 'skip_trigger', 'INS_TIMESTAMP', 'DW_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
