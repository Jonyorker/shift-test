<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $emp_id
 * @property string $reason
 * @property int $probationary
 * @property int $interim
 * @property int $annual
 */
class InetPerformanceReviewExclusions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inet_performanceReviewExclusions';

    protected $fillable = ['emp_id', 'reason', 'probationary', 'interim', 'annual'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
