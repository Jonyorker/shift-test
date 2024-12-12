<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $carrier
 * @property string $address
 * @property int $sort
 */
class SmsCarrier extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Sms_Carrier';

    protected $fillable = ['id', 'carrier', 'address', 'sort'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
