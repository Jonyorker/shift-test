<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $training_slug
 * @property string $user_id
 * @property string $result
 * @property float $score_pctg
 * @property float $score_points
 * @property float $passing_pctg
 * @property float $passing_points
 * @property string $ip_address
 * @property string $create_on
 * @property string $administrator
 * @property int $is_system_process
 * @property int $bison_training_company_id
 */
class TrainingTest extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Training_Test';

    protected $fillable = ['id', 'training_slug', 'user_id', 'result', 'score_pctg', 'score_points', 'passing_pctg', 'passing_points', 'ip_address', 'create_on', 'administrator', 'is_system_process', 'bison_training_company_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
