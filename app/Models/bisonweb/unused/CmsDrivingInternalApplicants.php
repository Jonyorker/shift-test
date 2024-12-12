<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property int $cms_driving_postings_id
 * @property string $application_date
 * @property string $ip_address
 * @property int $notice_sent
 * @property int $activity_id
 * @property int $is_awarded
 */
class CmsDrivingInternalApplicants extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Cms_Driving_Internal_Applicants';

    protected $fillable = ['id', 'emp_id', 'cms_driving_postings_id', 'application_date', 'ip_address', 'notice_sent', 'activity_id', 'is_awarded'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
