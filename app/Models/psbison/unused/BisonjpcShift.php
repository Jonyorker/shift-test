<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $asgntype
 * @property string $asgnid
 * @property string $otherid
 * @property string $startdt
 * @property string $enddt
 * @property string $calcdt
 */
class BisonjpcShift extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_jpcShift';

    protected $fillable = ['asgntype', 'asgnid', 'otherid', 'startdt', 'enddt', 'calcdt'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
