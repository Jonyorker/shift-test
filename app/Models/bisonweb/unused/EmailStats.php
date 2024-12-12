<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $date
 * @property string $email_address
 * @property int $mails_sent
 * @property int $mails_received
 * @property string $emp_id
 * @property string $created_date
 * @property int $mails_read
 */
class EmailStats extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Email_Stats';

    protected $fillable = ['id', 'date', 'email_address', 'mails_sent', 'mails_received', 'emp_id', 'created_date', 'mails_read'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
