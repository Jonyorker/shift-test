<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $sysname
 * @property int $sysvalue
 */
class LgstSysnum extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Lgst_Sysnum';

    protected $fillable = ['sysname', 'sysvalue'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
