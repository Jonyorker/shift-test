<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $modified_date
 * @property string $emp_id
 * @property int $is_active
 * @property int $cms_driving_positions_id
 * @property string $start_date
 * @property string $end_date
 * @property int $is_internal_only
 * @property int $highlight_job
 * @property int $email_notification
 */
class CmsDrivingPostings extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Cms_Driving_Postings';

    protected $fillable = ['id', 'title', 'description', 'modified_date', 'emp_id', 'is_active', 'cms_driving_positions_id', 'start_date', 'end_date', 'is_internal_only', 'highlight_job', 'email_notification'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
