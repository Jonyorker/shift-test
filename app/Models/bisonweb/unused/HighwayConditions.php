<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property int $seg
 * @property string $pr
 * @property string $ms
 * @property string $mv
 * @property string $ps
 * @property string $pv
 * @property string $mc
 * @property int $n
 * @property string $clr
 * @property string $updated_date
 * @property int $level
 */
class HighwayConditions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Highway_Conditions';

    protected $fillable = ['id', 'seg', 'pr', 'ms', 'mv', 'ps', 'pv', 'mc', 'n', 'clr', 'updated_date', 'level'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
