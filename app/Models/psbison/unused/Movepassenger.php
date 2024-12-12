<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $psgr_id
 * @property int $mov_number
 */
class Movepassenger extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Movepassenger';

    protected $fillable = [];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
