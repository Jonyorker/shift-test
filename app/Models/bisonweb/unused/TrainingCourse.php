<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property string $created_on
 * @property string $created_by
 * @property string $start_date
 * @property string $end_date
 * @property int $is_active
 * @property string $qualification_code
 * @property string $resources
 * @property string $description
 * @property string $version
 * @property int $training_course_category_id
 * @property string $expiry_code
 * @property int $is_internal
 * @property int $expiry_unit
 * @property string $expiry_type
 * @property int $expiry_is_close
 * @property string $department_owner
 * @property string $completion_date
 * @property string $grace_period
 * @property string $feed_back_url
 * @property string $orientation_type
 * @property string $orientation_group
 * @property int $reoccurring_expiration
 */
class TrainingCourse extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Training_Course';

    protected $fillable = ['id', 'slug', 'title', 'created_on', 'created_by', 'start_date', 'end_date', 'is_active', 'qualification_code', 'resources', 'description', 'version', 'training_course_category_id', 'expiry_code', 'is_internal', 'expiry_unit', 'expiry_type', 'expiry_is_close', 'department_owner', 'completion_date', 'grace_period', 'feed_back_url', 'orientation_type', 'orientation_group', 'reoccurring_expiration'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
