<?php

namespace App\Models\bison;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $stp
 * @property int $leg
 * @property int $mov
 * @property string $evt
 * @property string $trc
 * @property string $drv
 * @property string $formname
 * @property int $formid
 * @property int $recd
 * @property int $procd
 * @property string $err
 * @property string $dt
 * @property string $messagetype
 * @property int $dummyleg
 * @property string $err2
 * @property string $err3
 * @property string $err4
 */
class PlatSciAutoprocess extends Model
{
    use hasFactory;
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'platSci_autoprocess';

    protected $fillable = ['stp', 'leg', 'mov', 'evt', 'trc', 'drv', 'formname', 'formid', 'recd', 'procd', 'err', 'dt', 'messagetype', 'dummyleg', 'err2', 'err3', 'err4'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bison';
}
