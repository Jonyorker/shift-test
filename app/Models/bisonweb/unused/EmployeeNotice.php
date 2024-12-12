<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $employee_id
 * @property int $employee_notice_type_id
 * @property string $data
 * @property string $removal_date
 */
class EmployeeNotice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Employee_Notice';

    protected $fillable = ['id', 'employee_id', 'employee_notice_type_id', 'data', 'removal_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
