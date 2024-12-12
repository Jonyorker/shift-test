<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $device_uuid
 * @property string $build_version
 * @property string $commit_version
 * @property string $app_version
 * @property string $browser_version
 * @property string $engine
 * @property string $grid_support
 * @property string $manufacturer
 * @property string $operating_system
 * @property string $os_version
 * @property string $platform_name
 * @property string $user_agent
 * @property string $product
 * @property string $sqllite_support
 * @property string $source_time
 * @property string $model
 * @property string $pushy_devicetoken
 * @property int $is_active
 */
class Herd2goUserDevicesHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Herd2go_User_Devices_History';

    protected $fillable = ['id', 'emp_id', 'device_uuid', 'build_version', 'commit_version', 'app_version', 'browser_version', 'engine', 'grid_support', 'manufacturer', 'operating_system', 'os_version', 'platform_name', 'user_agent', 'product', 'sqllite_support', 'source_time', 'model', 'pushy_devicetoken', 'is_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
