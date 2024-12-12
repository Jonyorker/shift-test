<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $ord
 * @property string $dt
 * @property string $userid
 * @property string $status
 */
class BisonCustomsTracking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_CustomsTracking';

    protected $fillable = ['id', 'ord', 'dt', 'userid', 'status'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
