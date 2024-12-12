<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $huddle_project_id
 * @property int $huddle_resource_category_id
 * @property int $sort_order
 */
class HuddleProjectResourceCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Huddle_Project_Resource_Category';

    protected $fillable = ['id', 'huddle_project_id', 'huddle_resource_category_id', 'sort_order'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
