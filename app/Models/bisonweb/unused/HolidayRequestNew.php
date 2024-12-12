<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $employee_id
 * @property string $created_date
 * @property string $status
 * @property string $reply_by
 * @property string $reply_date
 * @property string $date_from
 * @property string $date_to
 * @property string $holiday_id
 * @property float $request_time
 * @property string $request_unit
 * @property float $approved_time
 * @property string $approved_unit
 * @property int $request_groupid
 * @property int $ody_sys_id
 * @property string $comment
 * @property string $reply_comment
 * @property string $cancel_comment
 * @property float $request_vacpay
 * @property float $approved_vacpay
 * @property int $is_test
 */
class HolidayRequestNew extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Holiday_Request_New';

    protected $fillable = ['id', 'employee_id', 'created_date', 'status', 'reply_by', 'reply_date', 'date_from', 'date_to', 'holiday_id', 'request_time', 'request_unit', 'approved_time', 'approved_unit', 'request_groupid', 'ody_sys_id', 'comment', 'reply_comment', 'cancel_comment', 'request_vacpay', 'approved_vacpay', 'is_test'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
