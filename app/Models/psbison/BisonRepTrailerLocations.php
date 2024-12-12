<?php

namespace App\Models\psbison;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $yard
 * @property string $cmp
 */
class BisonRepTrailerLocations extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BisonRep_TrailerLocations';

    protected $fillable = ['id', 'yard', 'cmp'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
