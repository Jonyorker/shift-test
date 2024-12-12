<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $icebreaker
 * @property int $huddle_resource_icebreaker_group_id
 * @property int $is_active
 */
class HuddleIcebreaker extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Huddle_Icebreaker';

    protected $fillable = ['id', 'title', 'icebreaker', 'huddle_resource_icebreaker_group_id', 'is_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
