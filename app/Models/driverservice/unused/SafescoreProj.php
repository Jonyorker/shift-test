<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $mpp_id
 * @property string $dt
 * @property int $projscore
 */
class SafescoreProj extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Safescore_Proj';

    protected $fillable = ['ID', 'mpp_id', 'dt', 'projscore'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
