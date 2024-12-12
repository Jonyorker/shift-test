<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $mpp_id
 * @property string $cc_date
 * @property string $cc_datetime
 * @property float $cc_latitude
 * @property float $cc_longitude
 * @property float $pd_latitude
 * @property float $pd_longitude
 * @property bool $in_per_diem_cty
 */
class DriverPerDiemHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Driver_Per_Diem_History';

    protected $fillable = ['id', 'mpp_id', 'cc_date', 'cc_datetime', 'cc_latitude', 'cc_longitude', 'pd_latitude', 'pd_longitude', 'in_per_diem_cty'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
