<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type
 * @property int $lgh_number
 * @property string $created_date
 * @property string $created_by
 * @property string $updated_date
 * @property string $updated_by
 * @property string $driver_code
 */
class LoadBoardDriverTracking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Load_Board_Driver_Tracking';

    protected $fillable = ['id', 'type', 'lgh_number', 'created_date', 'created_by', 'updated_date', 'updated_by', 'driver_code'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
