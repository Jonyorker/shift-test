<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $mpp_id
 * @property string $oldpta
 * @property string $newpta
 * @property string $changeby
 * @property string $changedate
 */
class BisonPtalog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Ptalog';

    protected $fillable = ['mpp_id', 'oldpta', 'newpta', 'changeby', 'changedate'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
