<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $created_date
 * @property string $created_by
 * @property string $script_location
 * @property int $is_active
 * @property string $mins
 * @property string $hours
 * @property string $dow
 * @property string $dom
 * @property string $month
 * @property int $is_single
 * @property string $code
 * @property int $show
 * @property string $type
 */
class NotificationScript extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Notification_Script';

    protected $fillable = ['id', 'title', 'description', 'created_date', 'created_by', 'script_location', 'is_active', 'mins', 'hours', 'dow', 'dom', 'month', 'is_single', 'code', 'show', 'type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
