<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $returns_process_id
 * @property string $emp_id
 * @property string $date_created
 * @property string $comment
 */
class ReturnsProcessComments extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Returns_Process_Comments';

    protected $fillable = ['id', 'returns_process_id', 'emp_id', 'date_created', 'comment'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
