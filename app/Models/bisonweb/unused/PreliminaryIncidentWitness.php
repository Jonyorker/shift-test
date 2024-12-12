<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $incident_id
 * @property string $full_name
 * @property string $day_phone
 * @property string $evening_phone
 * @property string $email_address
 * @property string $address
 * @property string $city
 * @property string $province
 */
class PreliminaryIncidentWitness extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Preliminary_Incident_Witness';

    protected $fillable = ['id', 'incident_id', 'full_name', 'day_phone', 'evening_phone', 'email_address', 'address', 'city', 'province'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
