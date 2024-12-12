<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $huddle_project_id
 * @property int $huddle_resource_category_id
 * @property string $created_date
 * @property string $created_by
 * @property string $description
 * @property int $parent_id
 * @property int $version_number
 * @property int $is_active
 * @property int $huddle_project_resource_category_id
 */
class HuddleIssue extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Huddle_Issue';

    protected $fillable = ['id', 'huddle_project_id', 'huddle_resource_category_id', 'created_date', 'created_by', 'description', 'parent_id', 'version_number', 'is_active', 'huddle_project_resource_category_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
