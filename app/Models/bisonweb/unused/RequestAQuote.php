<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $website
 * @property string $source
 * @property string $requested_date
 * @property string $name
 * @property string $email_address
 * @property string $phone_number
 * @property string $company
 * @property string $ip_address
 */
class RequestAQuote extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Request_A_Quote';

    protected $fillable = ['id', 'website', 'source', 'requested_date', 'name', 'email_address', 'phone_number', 'company', 'ip_address'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
