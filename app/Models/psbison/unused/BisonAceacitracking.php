<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $dt
 * @property int $mov
 * @property string $status
 * @property string $type
 * @property int $ord
 */
class BisonAceacitracking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Aceacitracking';

    protected $fillable = ['id', 'dt', 'mov', 'status', 'type', 'ord'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
