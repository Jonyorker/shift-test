<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $trc
 * @property string $latestatus
 * @property int $milesor
 * @property int $milesremain
 * @property string $lastupdate
 * @property int $lastleg
 * @property int $milestofinal
 * @property int $milesremainnext
 * @property string $lastloc
 * @property int $dNextLine
 * @property int $closure_id
 * @property int $closure_dist
 */
class BisonTractorstatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Tractorstatus';

    protected $fillable = ['trc', 'latestatus', 'milesor', 'milesremain', 'lastupdate', 'lastleg', 'milestofinal', 'milesremainnext', 'lastloc', 'dNextLine', 'closure_id', 'closure_dist'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
