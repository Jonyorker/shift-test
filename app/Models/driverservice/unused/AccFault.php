<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $flt_code
 * @property string $flt_description
 */
class AccFault extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Acc_Fault';

    protected $fillable = ['flt_code', 'flt_description'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
