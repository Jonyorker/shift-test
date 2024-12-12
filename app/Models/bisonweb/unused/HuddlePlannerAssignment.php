<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $huddle_planner_id
 * @property string $emp_id
 * @property int $sort_by
 * @property string $assigned_date
 */
class HuddlePlannerAssignment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Huddle_Planner_Assignment';

    protected $fillable = ['id', 'huddle_planner_id', 'emp_id', 'sort_by', 'assigned_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
