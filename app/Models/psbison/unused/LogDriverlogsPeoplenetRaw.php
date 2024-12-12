<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $created_date
 * @property string $effective_date
 * @property string $status_type
 * @property int $odometer
 * @property string $location
 * @property int $packet_id
 * @property string $updated_date
 * @property int $is_processed
 * @property string $hash_key
 * @property string $effective_date_adjusted
 * @property float $home_terminal_gmt
 * @property string $tractor_id
 */
class LogDriverlogsPeoplenetRaw extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Log_Driverlogs_Peoplenet_Raw';

    protected $fillable = ['emp_id', 'created_date', 'effective_date', 'status_type', 'odometer', 'location', 'packet_id', 'updated_date', 'is_processed', 'hash_key', 'effective_date_adjusted', 'home_terminal_gmt', 'tractor_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
