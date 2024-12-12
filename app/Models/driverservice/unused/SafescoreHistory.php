<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $mpp_id
 * @property string $dt
 * @property int $score
 * @property string $change
 * @property string $lastlevel
 * @property string $currentlevel
 */
class SafescoreHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Safescore_History';

    protected $fillable = ['id', 'mpp_id', 'dt', 'score', 'change', 'lastlevel', 'currentlevel'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
