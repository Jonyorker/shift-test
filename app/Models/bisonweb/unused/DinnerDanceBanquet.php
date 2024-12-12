<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $created_date
 * @property string $terminal
 * @property string $ip_address
 * @property string $event_year
 * @property string $dietary_restriction
 * @property string $dietary_other
 * @property int $plus_one
 * @property string $guest_name
 * @property string $dietary_restriction_guest
 * @property string $dietary_other_guest
 * @property int $is_cancelled
 * @property string $phone_number
 * @property string $modified_date
 * @property string $modified_by
 * @property int $rating
 */
class DinnerDanceBanquet extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Dinner_Dance_Banquet';

    protected $fillable = ['id', 'emp_id', 'created_date', 'terminal', 'ip_address', 'event_year', 'dietary_restriction', 'dietary_other', 'plus_one', 'guest_name', 'dietary_restriction_guest', 'dietary_other_guest', 'is_cancelled', 'phone_number', 'modified_date', 'modified_by', 'rating'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
