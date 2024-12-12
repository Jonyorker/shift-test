<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $dt
 * @property string $region
 * @property int $deliveries
 * @property int $late
 * @property string $category
 * @property int $trips
 */
class BisonOntimestats extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Ontimestats';

    protected $fillable = ['id', 'dt', 'region', 'deliveries', 'late', 'category', 'trips'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
