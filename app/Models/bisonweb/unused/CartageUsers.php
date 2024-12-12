<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $user_id
 * @property string $phone_number
 * @property string $start_date
 * @property string $end_date
 * @property int $is_active
 * @property string $first_name
 * @property string $email
 * @property string $fleet
 * @property string $car_id
 */
class CartageUsers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Cartage_Users';

    protected $fillable = ['id', 'user_id', 'phone_number', 'start_date', 'end_date', 'is_active', 'first_name', 'email', 'fleet', 'car_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
