<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property int $hubspot_id
 * @property int $hubspotprofile_id
 * @property string $create_date
 * @property string $modified_date
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $province
 * @property string $canadian_license
 * @property string $driving_school
 * @property string $experience
 * @property string $driver_position
 * @property string $driver_type
 * @property string $class5_1year
 * @property string $drive_in_US
 * @property string $driver_preference
 * @property string $documentation
 */
class BisonHubspotDrivers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Hubspot_Drivers';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    protected $fillable = ['hubspot_id', 'hubspotprofile_id', 'create_date', 'modified_date', 'first_name', 'last_name', 'email', 'phone', 'country', 'province', 'canadian_license', 'driving_school', 'experience', 'driver_position', 'driver_type', 'class5_1year', 'drive_in_US', 'driver_preference', 'documentation'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
