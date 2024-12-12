<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $is_active
 * @property int $country_id
 * @property int $sort_order
 */
class States extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'States';

    protected $fillable = ['id', 'name', 'description', 'is_active', 'country_id', 'sort_order'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
