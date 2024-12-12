<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $status_type
 * @property string $requested_by
 * @property string $requested_date
 * @property string $cancelled_by
 * @property string $cancelled_date
 * @property int $move_number
 */
class CustomClearanceBypass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Custom_Clearance_Bypass';

    protected $fillable = ['id', 'status_type', 'requested_by', 'requested_date', 'cancelled_by', 'cancelled_date', 'move_number'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
