<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $incident_reports_id
 * @property string $emp_id
 * @property string $comment
 * @property string $rejected_date
 * @property string $ip_address
 * @property int $is_supervisor
 */
class IncidentReportsRejected extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Incident_Reports_Rejected';

    protected $fillable = ['id', 'incident_reports_id', 'emp_id', 'comment', 'rejected_date', 'ip_address', 'is_supervisor'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
