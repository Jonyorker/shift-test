<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $screen_name
 * @property string $date
 * @property string $app_version
 * @property string $op_system
 * @property string $op_system_version
 * @property int $unique_screen_views
 * @property int $screen_views
 * @property string $source
 */
class GoogleAnalyticsStats extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Google_Analytics_Stats';

    protected $fillable = ['id', 'emp_id', 'screen_name', 'date', 'app_version', 'op_system', 'op_system_version', 'unique_screen_views', 'screen_views', 'source'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
