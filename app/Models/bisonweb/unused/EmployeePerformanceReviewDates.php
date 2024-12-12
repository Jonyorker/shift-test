<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $probation_late
 * @property string $interim_late
 * @property string $annual_late
 * @property string $idp_late
 * @property string $idp_interim_late
 * @property string $interim_next
 * @property string $annual_next
 * @property string $idp_next
 * @property string $idp_interim_next
 * @property string $probation_next
 */
class EmployeePerformanceReviewDates extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Employee_Performance_Review_Dates';

    protected $fillable = ['id', 'emp_id', 'probation_late', 'interim_late', 'annual_late', 'idp_late', 'idp_interim_late', 'interim_next', 'annual_next', 'idp_next', 'idp_interim_next', 'probation_next'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
