<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $label
 */
class HubspotResourcesProfileProperties extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Hubspot_Resources_Profile_Properties';

    protected $fillable = ['id', 'code', 'label'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
