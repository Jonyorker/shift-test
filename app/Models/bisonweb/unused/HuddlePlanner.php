<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $huddle_project_id
 * @property string $created_date
 * @property string $created_by
 * @property string $opportunity
 * @property int $huddle_resource_category_id
 * @property string $due_date
 * @property string $closed_date
 * @property string $completed_date
 * @property int $huddle_resource_priority_id
 * @property int $parent_id
 */
class HuddlePlanner extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Huddle_Planner';

    protected $fillable = ['id', 'huddle_project_id', 'created_date', 'created_by', 'opportunity', 'huddle_resource_category_id', 'due_date', 'closed_date', 'completed_date', 'huddle_resource_priority_id', 'parent_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
