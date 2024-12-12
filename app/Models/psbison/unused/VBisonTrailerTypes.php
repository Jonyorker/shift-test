<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $trl_type1
 * @property string $name
 * @property string $type
 */
class VBisonTrailerTypes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'v_bison_trailer_types';

    protected $fillable = ['trl_type1', 'name', 'type'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
