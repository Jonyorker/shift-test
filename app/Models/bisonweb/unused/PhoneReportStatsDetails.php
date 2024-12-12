<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $agent_id
 * @property string $breaktimedetail
 * @property string $ringtimedetail
 * @property string $AvgwaitHHMMSS
 * @property string $loggedinHHMMSS
 * @property string $acdnacdtalktime
 * @property string $NotReadyHHMMSS
 * @property int $CallsReturnedToQDueToTimeout
 * @property int $CallsReturnedToQ
 * @property int $ShortCallsAnswered
 * @property string $walkawaytimedetail
 * @property int $CallsAnswered
 * @property string $skillsettalktime
 * @property string $dntimedetails
 * @property int $CallsOffered
 * @property float $dnanswereddetails
 * @property float $acdnacdansdetails
 * @property float $confoutdetails
 * @property float $transfoutdetails
 * @property int $NetworkCallsAnswered
 * @property int $ReservedForCall
 * @property string $networktalktimedetail
 * @property string $reservedtimedetail
 * @property string $activity_date
 */
class PhoneReportStatsDetails extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Phone_Report_Stats_Details';

    protected $fillable = ['id', 'agent_id', 'breaktimedetail', 'ringtimedetail', 'AvgwaitHHMMSS', 'loggedinHHMMSS', 'acdnacdtalktime', 'NotReadyHHMMSS', 'CallsReturnedToQDueToTimeout', 'CallsReturnedToQ', 'ShortCallsAnswered', 'walkawaytimedetail', 'CallsAnswered', 'skillsettalktime', 'dntimedetails', 'CallsOffered', 'dnanswereddetails', 'acdnacdansdetails', 'confoutdetails', 'transfoutdetails', 'NetworkCallsAnswered', 'ReservedForCall', 'networktalktimedetail', 'reservedtimedetail', 'activity_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
