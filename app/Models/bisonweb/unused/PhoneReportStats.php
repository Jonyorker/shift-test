<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $agent_id
 * @property string $waittimesumHHMMSS
 * @property float $SumofCallsReturnedToQ
 * @property string $walkawaytimesum
 * @property float $SumofCallsReturnedToQDueToTimeout
 * @property string $RingTimeSum
 * @property string $breaktimesumHHMMSS
 * @property float $SumofShortCallsAnswered
 * @property string $avgacdnacdtalktimedaily
 * @property string $talktimesum
 * @property string $agentloggedinHHMMSS
 * @property float $SumofCallsAnswered
 * @property string $DNTalkTimeTimestamp
 * @property float $totdnanswereddaily
 * @property float $acdnacdansdaily
 * @property string $sumnotreadyHHMMSS
 * @property float $SumofCallsOffered
 * @property float $ConfOutDaily
 * @property float $TransfOutdaily
 * @property string $networktalktimedaily
 * @property string $reservedtimeday
 * @property float $SumofNetworkCallsAnswered
 * @property float $SumofReservedForCall
 * @property string $activity_date
 */
class PhoneReportStats extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Phone_Report_Stats';

    protected $fillable = ['id', 'agent_id', 'waittimesumHHMMSS', 'SumofCallsReturnedToQ', 'walkawaytimesum', 'SumofCallsReturnedToQDueToTimeout', 'RingTimeSum', 'breaktimesumHHMMSS', 'SumofShortCallsAnswered', 'avgacdnacdtalktimedaily', 'talktimesum', 'agentloggedinHHMMSS', 'SumofCallsAnswered', 'DNTalkTimeTimestamp', 'totdnanswereddaily', 'acdnacdansdaily', 'sumnotreadyHHMMSS', 'SumofCallsOffered', 'ConfOutDaily', 'TransfOutdaily', 'networktalktimedaily', 'reservedtimeday', 'SumofNetworkCallsAnswered', 'SumofReservedForCall', 'activity_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
