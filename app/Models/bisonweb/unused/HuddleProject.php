<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $is_active
 * @property string $created_date
 * @property string $start_date
 * @property string $end_date
 * @property string $terminal
 * @property string $meeting_dow
 * @property string $meeting_time
 * @property int $huddle_resource_icebreaker_group_id
 * @property int $is_private
 * @property string $type
 */
class HuddleProject extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Huddle_Project';

    protected $fillable = ['id', 'title', 'description', 'is_active', 'created_date', 'start_date', 'end_date', 'terminal', 'meeting_dow', 'meeting_time', 'huddle_resource_icebreaker_group_id', 'is_private', 'type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
