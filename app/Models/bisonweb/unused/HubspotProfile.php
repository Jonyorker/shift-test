<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $hupspot_id
 * @property string $last_modified
 * @property string $created_date
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property string $life_cycle_stage
 * @property string $employee_id
 */
class HubspotProfile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Hubspot_Profile';

    protected $fillable = ['id', 'hupspot_id', 'last_modified', 'created_date', 'first_name', 'last_name', 'email', 'phone_number', 'life_cycle_stage', 'employee_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
