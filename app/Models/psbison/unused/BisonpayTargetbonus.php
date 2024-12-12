<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type
 * @property string $cat
 * @property int $yy
 * @property int $mm
 * @property int $val
 */
class BisonpayTargetbonus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonpay_Targetbonus';

    protected $fillable = ['id', 'type', 'cat', 'yy', 'mm', 'val'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
