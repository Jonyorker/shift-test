<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $iso
 * @property string $name
 * @property string $printable_name
 * @property string $iso3
 * @property int $numcode
 * @property int $sort_order
 */
class Country extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Country';

    protected $fillable = ['id', 'iso', 'name', 'printable_name', 'iso3', 'numcode', 'sort_order'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
