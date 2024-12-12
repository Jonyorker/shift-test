<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_date
 * @property string $ip_address
 * @property string $employee_id
 * @property int $have_travelled_to
 * @property int $traveller_close_contact
 * @property int $has_symptoms
 * @property int $travelled_oversea
 * @property int $travelled_usa
 */
class FormCovid19 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Form_Covid19';

    protected $fillable = ['id', 'created_date', 'ip_address', 'employee_id', 'have_travelled_to', 'traveller_close_contact', 'has_symptoms', 'travelled_oversea', 'travelled_usa'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
