<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $ip_address
 * @property string $created_date
 * @property int $mov_number
 * @property string $cmp_id
 * @property string $stp_event
 * @property string $comment
 */
class CityPayrollComments extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'City_Payroll_Comments';

    protected $fillable = ['id', 'emp_id', 'ip_address', 'created_date', 'mov_number', 'cmp_id', 'stp_event', 'comment'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
