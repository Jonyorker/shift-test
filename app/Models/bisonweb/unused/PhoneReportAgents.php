<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $agent_id
 * @property string $emp_id
 * @property string $active_date
 * @property string $deactivate_date
 */
class PhoneReportAgents extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Phone_Report_Agents';

    protected $fillable = ['id', 'agent_id', 'emp_id', 'active_date', 'deactivate_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
