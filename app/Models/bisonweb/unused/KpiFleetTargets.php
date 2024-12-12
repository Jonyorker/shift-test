<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $effective_date
 * @property string $type
 * @property string $label
 * @property float $value
 * @property string $emp_id
 */
class KpiFleetTargets extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Kpi_Fleet_Targets';

    protected $fillable = ['id', 'effective_date', 'type', 'label', 'value', 'emp_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
