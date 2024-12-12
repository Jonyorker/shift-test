<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $cartage_user_id
 * @property string $carrier_id
 * @property string $stop_number
 * @property string $latitude
 * @property string $longitude
 * @property string $event_time_cst
 * @property string $event_time
 * @property string $type
 * @property string $created_date
 * @property string $modified_date
 * @property string $error_message
 * @property int $processed
 * @property string $modified_by
 * @property int $is_delete
 * @property string $created_by
 */
class CartageStopUpdateNew extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Cartage_Stop_Update_New';

    protected $fillable = ['id', 'cartage_user_id', 'carrier_id', 'stop_number', 'latitude', 'longitude', 'event_time_cst', 'event_time', 'type', 'created_date', 'modified_date', 'error_message', 'processed', 'modified_by', 'is_delete', 'created_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
