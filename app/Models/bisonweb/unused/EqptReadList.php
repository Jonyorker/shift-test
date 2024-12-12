<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $unit_number
 * @property int $is_trailer
 * @property float $set_temp
 * @property float $box_temp
 * @property int $is_loaded
 * @property string $notes
 * @property string $comments
 * @property string $status
 * @property string $terminal
 * @property string $created_date
 * @property string $created_by
 * @property string $completed_on
 * @property int $sort_order
 */
class EqptReadList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Eqpt_Read_List';

    protected $fillable = ['id', 'unit_number', 'is_trailer', 'set_temp', 'box_temp', 'is_loaded', 'notes', 'comments', 'status', 'terminal', 'created_date', 'created_by', 'completed_on', 'sort_order'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
