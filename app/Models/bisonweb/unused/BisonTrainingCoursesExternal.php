<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $emp_id
 * @property int $company_id
 * @property int $training_course_id
 * @property string $date_created
 */
class BisonTrainingCoursesExternal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Training_Courses_External';

    protected $fillable = ['first_name', 'last_name', 'emp_id', 'company_id', 'training_course_id', 'date_created'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
