<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $mov_number
 * @property string $trailer_number
 * @property string $emp_id
 * @property string $created_date
 * @property string $type
 */
class BisonTemperatureoffexclude extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Temperatureoffexclude';

    protected $fillable = ['mov_number', 'trailer_number', 'emp_id', 'created_date', 'type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
