<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $incident_id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $address
 * @property string $city
 * @property string $province
 * @property string $postal
 * @property string $city_other
 * @property string $province_other
 * @property string $license_number
 * @property string $vehicle_license_plate
 * @property string $vehicle_license_plate_prov
 * @property string $vehicle_make
 * @property string $vehicle_model
 * @property string $vehicle_colour
 * @property string $vehicle_year
 * @property string $vehicle_owner
 * @property string $vehicle_phone
 * @property string $vehicle_phone_other
 * @property string $vehicle_address
 * @property string $vehicle_city
 * @property string $vehicle_province
 * @property int $vehicle_occupants
 * @property int $vehicle_injuries
 * @property int $vehicle_fatality
 * @property string $third_party_insurance
 * @property string $policy_number
 * @property string $insurance_address
 * @property string $insurance_city
 * @property string $insurance_province
 */
class PreliminaryIncidentOtherParty extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Preliminary_Incident_Other_Party';

    protected $fillable = ['id', 'incident_id', 'first_name', 'last_name', 'phone_number', 'address', 'city', 'province', 'postal', 'city_other', 'province_other', 'license_number', 'vehicle_license_plate', 'vehicle_license_plate_prov', 'vehicle_make', 'vehicle_model', 'vehicle_colour', 'vehicle_year', 'vehicle_owner', 'vehicle_phone', 'vehicle_phone_other', 'vehicle_address', 'vehicle_city', 'vehicle_province', 'vehicle_occupants', 'vehicle_injuries', 'vehicle_fatality', 'third_party_insurance', 'policy_number', 'insurance_address', 'insurance_city', 'insurance_province'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
