<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $user_code
 * @property string $user_type
 * @property int $bison_employee_contact_id
 * @property string $contact_value
 * @property string $contact_type
 * @property int $sms_carrier_id
 * @property string $created_on
 * @property int $is_active
 * @property string $activation_code
 */
class NotificationUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Notification_User';

    protected $fillable = ['id', 'user_code', 'user_type', 'bison_employee_contact_id', 'contact_value', 'contact_type', 'sms_carrier_id', 'created_on', 'is_active', 'activation_code'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
