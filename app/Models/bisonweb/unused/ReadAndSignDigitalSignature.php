<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $read_and_sign_id
 * @property string $emp_id
 * @property string $sign_date
 * @property string $ip_address
 */
class ReadAndSignDigitalSignature extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Read_And_Sign_Digital_Signature';

    protected $fillable = ['id', 'read_and_sign_id', 'emp_id', 'sign_date', 'ip_address'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
