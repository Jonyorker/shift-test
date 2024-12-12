<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $organization_code
 * @property string $created_by
 * @property string $created_on
 * @property string $terminal
 */
class AfterHoursAccess extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'After_Hours_Access';

    protected $fillable = ['emp_id', 'organization_code', 'created_by', 'created_on', 'terminal'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
