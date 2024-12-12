<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $eqpt_read_list_id
 * @property int $eqpt_read_label_id
 * @property string $note
 * @property int $is_complete
 * @property string $complete_date
 * @property string $completed_by
 */
class EqptReadListLabel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Eqpt_Read_List_Label';

    protected $fillable = ['id', 'eqpt_read_list_id', 'eqpt_read_label_id', 'note', 'is_complete', 'complete_date', 'completed_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
