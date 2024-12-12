<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $mppid
 * @property string $lastname
 * @property string $firstname
 * @property string $fleet
 * @property string $drvtype1
 * @property string $drvtype2
 * @property string $drvtype3
 * @property string $hiredate
 * @property string $termdate
 */
class KpiFleetTurnover extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Kpi_Fleet_Turnover';

    protected $fillable = ['id', 'mppid', 'lastname', 'firstname', 'fleet', 'drvtype1', 'drvtype2', 'drvtype3', 'hiredate', 'termdate'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
