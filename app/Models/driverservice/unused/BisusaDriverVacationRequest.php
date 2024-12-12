<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $driver_code
 * @property string $date_paid
 * @property float $request_amount
 * @property string $requested_by
 * @property string $created_date
 * @property string $updated_date
 * @property string $comment
 * @property string $status
 * @property string $updated_by
 * @property string $created_by
 * @property string $reply_by
 * @property string $reply_date
 * @property string $reply_comment
 * @property string $fleet
 * @property float $approved_amount
 * @property int $request_all
 */
class BisusaDriverVacationRequest extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisusa_Driver_Vacation_Request';

    protected $fillable = ['driver_code', 'date_paid', 'request_amount', 'requested_by', 'created_date', 'updated_date', 'comment', 'status', 'updated_by', 'created_by', 'reply_by', 'reply_date', 'reply_comment', 'fleet', 'approved_amount', 'request_all'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
