<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $created_on
 * @property string $modified_date
 * @property string $first_name
 * @property string $last_name
 * @property string $accident_date
 * @property string $accident_tractor
 * @property string $accident_trailer
 * @property string $accident_location
 * @property string $accident_city
 * @property string $accident_province
 * @property string $accident_driver_injury
 * @property int $accident_citation_issued
 * @property int $accident_cargo_damage
 * @property string $police_name
 * @property string $detachment
 * @property string $police_phone
 * @property string $cruiser_number
 * @property string $badge_number
 * @property string $collision_report_number
 * @property string $accident_roadcond
 * @property string $accident_weathercond
 * @property string $accident_traffic
 * @property string $accident_light
 * @property string $accident_otherone
 * @property int $accident_travelling_speed
 * @property string $travelling_speed
 * @property int $accident_posted_speed
 * @property string $posted_speed
 * @property int $accident_cruise
 * @property string $damage_truck
 * @property string $damage_trailerOne
 * @property string $damage_trailerTwo
 * @property string $damage_bison_property
 * @property string $damage_other_property
 * @property string $damage_driver_statement
 * @property string $claim_incident_number
 * @property string $comment
 * @property string $commented_by
 * @property string $commented_date
 */
class PreliminaryIncidentReports extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Preliminary_Incident_Reports';

    protected $fillable = ['id', 'emp_id', 'created_on', 'modified_date', 'first_name', 'last_name', 'accident_date', 'accident_tractor', 'accident_trailer', 'accident_location', 'accident_city', 'accident_province', 'accident_driver_injury', 'accident_citation_issued', 'accident_cargo_damage', 'police_name', 'detachment', 'police_phone', 'cruiser_number', 'badge_number', 'collision_report_number', 'accident_roadcond', 'accident_weathercond', 'accident_traffic', 'accident_light', 'accident_otherone', 'accident_travelling_speed', 'travelling_speed', 'accident_posted_speed', 'posted_speed', 'accident_cruise', 'damage_truck', 'damage_trailerOne', 'damage_trailerTwo', 'damage_bison_property', 'damage_other_property', 'damage_driver_statement', 'claim_incident_number', 'comment', 'commented_by', 'commented_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
