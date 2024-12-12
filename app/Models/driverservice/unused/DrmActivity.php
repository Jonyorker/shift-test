<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $act_id
 * @property string $mpp_id
 * @property string $act_user
 * @property string $act_datetime
 * @property int $act_content
 * @property int $act_biscontent
 * @property string $act_category
 * @property string $act_subject
 * @property int $act_parentthread
 * @property string $act_relatesto
 * @property string $act_status
 * @property int $act_openissues
 * @property string $act_attachment
 * @property string $act_summary
 * @property int $act_move
 * @property int $act_stopnum
 * @property int $act_notify
 * @property string $act_notifydate
 * @property int $act_confidential
 * @property string $act_format
 * @property string $act_category2
 * @property int $act_PDRP
 * @property int $act_PDRP_nextactid
 * @property string $act_PDRPlevel
 */
class DrmActivity extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Drm_Activity';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'act_id';

    protected $fillable = ['mpp_id', 'act_user', 'act_datetime', 'act_content', 'act_biscontent', 'act_category', 'act_subject', 'act_parentthread', 'act_relatesto', 'act_status', 'act_openissues', 'act_attachment', 'act_summary', 'act_move', 'act_stopnum', 'act_notify', 'act_notifydate', 'act_confidential', 'act_format', 'act_category2', 'act_PDRP', 'act_PDRP_nextactid', 'act_PDRPlevel'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
