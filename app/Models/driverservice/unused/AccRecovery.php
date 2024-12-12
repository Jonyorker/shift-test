<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $acc_id
 * @property int $clm_id
 * @property int $rec_line
 * @property string $rec_category
 * @property string $eqp_equipid
 * @property float $rec_deduct
 * @property float $rec_estimate
 * @property float $rec_actual
 * @property float $rec_recovmpi
 * @property float $rec_recovtp
 * @property float $rec_recovoo
 * @property float $rec_actrecovmpi
 * @property float $rec_actrecovtp
 * @property float $rec_actrecovoo
 * @property float $rec_recovSal
 * @property float $rec_actrecovSal
 * @property float $cost_actual
 * @property float $cost_recovered
 * @property float $cost_mpidirect
 * @property float $cost_otherdirect
 * @property string $rec_updatedate
 * @property string $rec_updateby
 */
class AccRecovery extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Acc_Recovery';

    protected $fillable = ['acc_id', 'clm_id', 'rec_line', 'rec_category', 'eqp_equipid', 'rec_deduct', 'rec_estimate', 'rec_actual', 'rec_recovmpi', 'rec_recovtp', 'rec_recovoo', 'rec_actrecovmpi', 'rec_actrecovtp', 'rec_actrecovoo', 'rec_recovSal', 'rec_actrecovSal', 'cost_actual', 'cost_recovered', 'cost_mpidirect', 'cost_otherdirect', 'rec_updatedate', 'rec_updateby'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
