<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type1
 * @property string $lh_sh_city
 * @property string $ngt_day_expe
 * @property string $dfp_vet_ici
 * @property string $tp_sg
 */
class ScorecardUtilizationDriverTypes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Scorecard_Utilization_Driver_Types';

    protected $fillable = ['id', 'type1', 'lh_sh_city', 'ngt_day_expe', 'dfp_vet_ici', 'tp_sg'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
