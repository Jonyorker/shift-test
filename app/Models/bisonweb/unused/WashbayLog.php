<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_by
 * @property string $created_date
 * @property string $unit_number
 * @property string $required_date
 * @property string $comments
 * @property string $modified_by
 * @property string $modified_date
 * @property string $follow_up_comments
 * @property string $unit_type
 * @property string $vendor
 * @property int $combo_id
 * @property string $attendants
 * @property string $terminal
 * @property string $shunt_code
 * @property string $delete_date
 * @property string $delete_by
 * @property string $completed_date
 * @property string $completed_by
 * @property string $comment
 */
class WashbayLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Washbay_Log';

    protected $fillable = ['id', 'created_by', 'created_date', 'unit_number', 'required_date', 'comments', 'modified_by', 'modified_date', 'follow_up_comments', 'unit_type', 'vendor', 'combo_id', 'attendants', 'terminal', 'shunt_code', 'delete_date', 'delete_by', 'completed_date', 'completed_by', 'comment'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
