<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $st_id
 * @property string $mpp_id
 * @property string $st_status
 * @property string $st_startdate
 * @property string $st_enddate
 * @property string $st_updated
 * @property string $st_updatedby
 * @property string $st_comment
 * @property int $st_rehire
 * @property string $st_leavereason
 * @property string $st_quit
 * @property string $st_oldvalue
 * @property string $st_newvalue
 * @property int $st_rehiredDriver
 */
class DrmStatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Drm_Status';

    protected $fillable = ['st_id', 'mpp_id', 'st_status', 'st_startdate', 'st_enddate', 'st_updated', 'st_updatedby', 'st_comment', 'st_rehire', 'st_leavereason', 'st_quit', 'st_oldvalue', 'st_newvalue', 'st_rehiredDriver'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
