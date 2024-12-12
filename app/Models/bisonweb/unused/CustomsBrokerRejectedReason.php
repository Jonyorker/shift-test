<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $customs_broker_package_id
 * @property string $reason
 * @property string $created_by
 * @property string $created_date
 * @property string $updated_by
 * @property string $updated_date
 * @property string $driver
 * @property string $communication
 * @property int $mov_number
 */
class CustomsBrokerRejectedReason extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Customs_Broker_Rejected_Reason';

    protected $fillable = ['id', 'customs_broker_package_id', 'reason', 'created_by', 'created_date', 'updated_by', 'updated_date', 'driver', 'communication', 'mov_number'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
