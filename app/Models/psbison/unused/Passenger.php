<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $psgr_id
 * @property string $psgr_firstname
 * @property string $psgr_lastname
 * @property string $psgr_middleinitial
 * @property string $psgr_address1
 * @property string $psgr_address2
 * @property int $psgr_city
 * @property string $psgr_ctynmstct
 * @property string $psgr_state
 * @property string $psgr_zip
 * @property string $psgr_country
 * @property string $psgr_gender
 * @property string $psgr_dateofbirth
 * @property string $psgr_citizenship_status
 * @property string $psgr_citizenship_country
 * @property string $psgr_driverlicense
 * @property string $psgr_licenseclass
 * @property string $psgr_license_region
 * @property string $psgr_aceid_type
 * @property string $psgr_aceid_number
 */
class Passenger extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Passenger';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'psgr_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    protected $fillable = ['psgr_firstname', 'psgr_lastname', 'psgr_middleinitial', 'psgr_address1', 'psgr_address2', 'psgr_city', 'psgr_ctynmstct', 'psgr_state', 'psgr_zip', 'psgr_country', 'psgr_gender', 'psgr_dateofbirth', 'psgr_citizenship_status', 'psgr_citizenship_country', 'psgr_driverlicense', 'psgr_licenseclass', 'psgr_license_region', 'psgr_aceid_type', 'psgr_aceid_number'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
