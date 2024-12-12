<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $iss_id
 * @property string $mpp_id
 * @property int $act_id
 * @property string $iss_cause
 * @property string $iss_class
 * @property string $iss_problem
 * @property string $iss_status
 * @property string $iss_followby
 * @property string $iss_followname
 * @property string $iss_followdate
 * @property string $iss_updateby
 * @property string $iss_updatedate
 * @property int $iss_notify
 * @property string $iss_subproblem
 */
class DrmIssues extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Drm_Issues';

    protected $fillable = ['iss_id', 'mpp_id', 'act_id', 'iss_cause', 'iss_class', 'iss_problem', 'iss_status', 'iss_followby', 'iss_followname', 'iss_followdate', 'iss_updateby', 'iss_updatedate', 'iss_notify', 'iss_subproblem'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
