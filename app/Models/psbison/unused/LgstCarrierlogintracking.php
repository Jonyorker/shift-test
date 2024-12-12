<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $carrierlogin_id
 * @property string $ipaddress
 * @property string $date
 */
class LgstCarrierlogintracking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Lgst_Carrierlogintracking';

    protected $fillable = ['id', 'carrierlogin_id', 'ipaddress', 'date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
