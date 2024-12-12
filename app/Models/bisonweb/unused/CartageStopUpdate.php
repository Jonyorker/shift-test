<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $cartage_user_id
 * @property string $carrier_id
 * @property string $stop_number
 * @property string $arrive_lat
 * @property string $arrive_lng
 * @property string $depart_lat
 * @property string $depart_lng
 * @property string $arrive_date_cst
 * @property string $depart_date_cst
 * @property string $created_date
 * @property string $modified_date
 * @property string $error_message
 * @property int $processed
 * @property string $modified_by
 * @property int $is_delete
 */
class CartageStopUpdate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Cartage_Stop_Update';

    protected $fillable = ['id', 'cartage_user_id', 'carrier_id', 'stop_number', 'arrive_lat', 'arrive_lng', 'depart_lat', 'depart_lng', 'arrive_date_cst', 'depart_date_cst', 'created_date', 'modified_date', 'error_message', 'processed', 'modified_by', 'is_delete'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
