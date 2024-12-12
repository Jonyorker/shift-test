<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $Acc_type
 * @property string $Acc_date
 * @property string $Acc_dateentered
 * @property string $Acc_enteredby
 * @property string $App_name
 * @property string $Acc_description
 * @property string $mpp_id
 */
class AppAccidentHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'App_Accident_History';

    protected $fillable = ['ID', 'Acc_type', 'Acc_date', 'Acc_dateentered', 'Acc_enteredby', 'App_name', 'Acc_description', 'mpp_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
