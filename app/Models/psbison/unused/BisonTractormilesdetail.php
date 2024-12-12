<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $trc
 * @property string $tm_fleet
 * @property string $tm_date
 * @property int $tm_miles
 * @property string $tm_type4
 * @property int $tm_paid
 * @property int $tm_unpaid
 */
class BisonTractormilesdetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Tractormilesdetail';

    protected $fillable = ['trc', 'tm_fleet', 'tm_date', 'tm_miles', 'tm_type4', 'tm_paid', 'tm_unpaid'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
