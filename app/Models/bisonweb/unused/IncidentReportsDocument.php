<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $incident_reports_id
 * @property string $name
 * @property string $mime
 * @property int $length
 * @property string $ext
 * @property string $hash
 * @property string $emp_id
 * @property string $date_added
 */
class IncidentReportsDocument extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Incident_Reports_Document';

    protected $fillable = ['id', 'incident_reports_id', 'name', 'mime', 'length', 'ext', 'hash', 'emp_id', 'date_added'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
