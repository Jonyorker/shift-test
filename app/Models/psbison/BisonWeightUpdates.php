<?php

namespace App\Models\psbison;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $mov
 * @property int $ord
 * @property string $trc
 * @property int $wgt
 * @property string $dt
 * @property string $msg
 * @property int $steers
 * @property int $drives
 * @property int $trailer
 * @property int $fuellevel
 * @property int $bogeys
 */
class BisonWeightUpdates extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['id', 'mov', 'ord', 'trc', 'wgt', 'dt', 'msg', 'steers', 'drives', 'trailer', 'fuellevel', 'bogeys'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';

    protected $table = 'bison_weightupdates';
}
