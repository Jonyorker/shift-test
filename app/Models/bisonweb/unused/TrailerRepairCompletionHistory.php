<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $unit_number
 * @property string $ro_number
 * @property string $action
 * @property string $comment
 * @property string $create_date
 * @property string $created_by
 * @property string $yard_id
 */
class TrailerRepairCompletionHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Trailer_Repair_Completion_History';

    protected $fillable = ['id', 'unit_number', 'ro_number', 'action', 'comment', 'create_date', 'created_by', 'yard_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
