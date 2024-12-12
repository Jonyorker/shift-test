<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $hubspot_profile_id
 * @property int $hubspot_resources_profile_properties_id
 * @property string $value
 * @property string $last_modified
 */
class HubspotProfileProperties extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Hubspot_Profile_Properties';

    protected $fillable = ['id', 'hubspot_profile_id', 'hubspot_resources_profile_properties_id', 'value', 'last_modified'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
