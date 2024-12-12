<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $mov
 * @property string $carrier
 * @property int $prevmov
 * @property int $nextmov
 * @property int $result
 * @property int $seq
 * @property int $groupid
 * @property int $isstart
 * @property int $isend
 * @property string $status
 * @property string $upddt
 * @property string $updby
 * @property int $isauto
 */
class LgstSequence extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Lgst_Sequence';

    protected $fillable = ['mov', 'carrier', 'prevmov', 'nextmov', 'result', 'seq', 'groupid', 'isstart', 'isend', 'status', 'upddt', 'updby', 'isauto'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
