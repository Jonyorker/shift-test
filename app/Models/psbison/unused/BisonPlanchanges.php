<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $driverid
 * @property int $mov
 * @property int $leg
 * @property string $status
 * @property string $tripstart
 * @property int $queueid
 * @property string $changeby
 * @property string $changedate
 */
class BisonPlanchanges extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Planchanges';

    protected $fillable = ['id', 'driverid', 'mov', 'leg', 'status', 'tripstart', 'queueid', 'changeby', 'changedate'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
