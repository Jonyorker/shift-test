<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $injury_type
 */
class SafetyIncidentInjuryType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Safety_Incident_Injury_Type';

    protected $fillable = ['id', 'injury_type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
