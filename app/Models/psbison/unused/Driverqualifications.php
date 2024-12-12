<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $driverqualification_id
 * @property string $drq_type
 * @property string $drq_id
 * @property string $drq_date
 * @property string $drq_driver
 * @property mixed $timestamp
 * @property int $drq_quantity
 * @property string $drq_expire_date
 * @property string $drq_expire_flag
 * @property string $drq_source
 * @property string $drq_field
 * @property float $drq_value
 * @property string $drq_units
 */
class Driverqualifications extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Driverqualifications';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'driverqualification_id';

    protected $fillable = ['drq_type', 'drq_id', 'drq_date', 'drq_driver', 'timestamp', 'drq_quantity', 'drq_expire_date', 'drq_expire_flag', 'drq_source', 'drq_field', 'drq_value', 'drq_units'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
