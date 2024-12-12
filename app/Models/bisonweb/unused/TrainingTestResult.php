<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $training_test_id
 * @property string $question
 * @property string $answer
 */
class TrainingTestResult extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Training_Test_Result';

    protected $fillable = ['id', 'training_test_id', 'question', 'answer'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
