<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_date
 * @property string $carrier_id
 * @property int $order_number
 * @property int $move_number
 * @property int $leg_number
 * @property string $start_date
 * @property string $earliest_start_date
 * @property string $latest_start_date
 * @property string $end_date
 * @property string $earliest_end_date
 * @property string $latest_end_date
 * @property string $origin_name
 * @property string $origin_address
 * @property string $origin_city
 * @property string $origin_state
 * @property string $origin_zip
 * @property string $origin_country
 * @property float $origin_latitude
 * @property float $origin_longitude
 * @property int $origin_phone
 * @property int $origin_gmt
 * @property string $destination_name
 * @property string $destination_address
 * @property string $destination_city
 * @property string $destination_state
 * @property string $destination_zip
 * @property string $destination_country
 * @property float $destination_latitude
 * @property float $destination_longitude
 * @property int $destination_phone
 * @property int $destination_gmt
 * @property string $status
 * @property int $weight
 * @property int $miles
 * @property int $pieces
 * @property int $max_temp
 * @property int $min_temp
 * @property string $commodity
 */
class BisonCarrierOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Carrier_Order';

    protected $fillable = ['created_date', 'carrier_id', 'order_number', 'move_number', 'leg_number', 'start_date', 'earliest_start_date', 'latest_start_date', 'end_date', 'earliest_end_date', 'latest_end_date', 'origin_name', 'origin_address', 'origin_city', 'origin_state', 'origin_zip', 'origin_country', 'origin_latitude', 'origin_longitude', 'origin_phone', 'origin_gmt', 'destination_name', 'destination_address', 'destination_city', 'destination_state', 'destination_zip', 'destination_country', 'destination_latitude', 'destination_longitude', 'destination_phone', 'destination_gmt', 'status', 'weight', 'miles', 'pieces', 'max_temp', 'min_temp', 'commodity'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
