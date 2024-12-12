<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $mpp_id
 * @property string $dt
 * @property string $category
 * @property int $score
 * @property string $change
 * @property string $lastlevel
 * @property string $currentlevel
 */
class SafescoreHistoryCategories extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Safescore_History_Categories';

    protected $fillable = ['ID', 'mpp_id', 'dt', 'category', 'score', 'change', 'lastlevel', 'currentlevel'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
