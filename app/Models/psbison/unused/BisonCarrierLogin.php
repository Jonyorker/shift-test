<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $userID
 * @property string $Password
 * @property string $carrierID
 * @property string $fname
 * @property string $lname
 * @property string $phone
 * @property string $phone2
 * @property string $Note
 * @property string $password_reset_date
 * @property string $password_history
 */
class BisonCarrierLogin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_CarrierLogin';

    protected $fillable = ['ID', 'userID', 'Password', 'carrierID', 'fname', 'lname', 'phone', 'phone2', 'Note', 'password_reset_date', 'password_history'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
