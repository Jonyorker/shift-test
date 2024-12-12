<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $lastrun
 * @property int $cpu_busy
 * @property int $io_busy
 * @property int $idle
 * @property int $pack_received
 * @property int $pack_sent
 * @property int $connections
 * @property int $pack_errors
 * @property int $total_read
 * @property int $total_write
 * @property int $total_errors
 */
class SptMonitor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Spt_Monitor';

    protected $fillable = ['lastrun', 'cpu_busy', 'io_busy', 'idle', 'pack_received', 'pack_sent', 'connections', 'pack_errors', 'total_read', 'total_write', 'total_errors'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
