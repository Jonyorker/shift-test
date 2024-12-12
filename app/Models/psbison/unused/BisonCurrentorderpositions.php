<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ord
 * @property string $type
 * @property float $lat
 * @property float $lng
 * @property string $dt
 * @property string $description
 * @property string $currtrailer
 * @property string $city
 * @property string $prov
 * @property string $country
 * @property string $typesrc
 * @property string $dtUTC
 * @property string $dtCST
 */
class BisonCurrentorderpositions extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Currentorderpositions';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ord';

    protected $fillable = ['type', 'lat', 'lng', 'dt', 'description', 'currtrailer', 'city', 'prov', 'country', 'typesrc', 'dtUTC', 'dtCST'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
