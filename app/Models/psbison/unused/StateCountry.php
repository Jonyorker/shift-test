<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $stc_state_c
 * @property string $stc_country_c
 * @property string $stc_state_desc
 */
class StateCountry extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'StateCountry';

    protected $fillable = ['stc_state_desc'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
