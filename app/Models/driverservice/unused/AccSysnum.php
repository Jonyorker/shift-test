<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $sysname
 * @property int $sysvalue
 */
class AccSysnum extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Acc_Sysnum';

    protected $fillable = ['sysname', 'sysvalue'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
