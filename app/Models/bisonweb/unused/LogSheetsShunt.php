<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $log_date
 * @property string $time_in_hours
 * @property int $log_shunt_task_id
 * @property string $created_date
 * @property string $ip_address
 * @property int $is_proccessed
 * @property string $processed_date
 * @property string $modified_by
 * @property string $modified_date
 */
class LogSheetsShunt extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Log_Sheets_Shunt';

    protected $fillable = ['id', 'emp_id', 'log_date', 'time_in_hours', 'log_shunt_task_id', 'created_date', 'ip_address', 'is_proccessed', 'processed_date', 'modified_by', 'modified_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
