<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $dt
 * @property string $fleet
 * @property string $type1
 * @property int $cnt
 * @property int $miles
 * @property int $oocnt
 * @property int $oomiles
 * @property int $budgetmiles
 * @property int $budgetmilesoo
 */
class BisonkpiFactsFleet2 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonkpi_Facts_Fleet2';

    protected $fillable = ['id', 'dt', 'fleet', 'type1', 'cnt', 'miles', 'oocnt', 'oomiles', 'budgetmiles', 'budgetmilesoo'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
