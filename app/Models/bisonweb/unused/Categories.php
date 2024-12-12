<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $applies_to
 * @property string $find_conditions
 * @property string $condition
 * @property string $front_page
 * @property int $position
 * @property string $counter_conditions
 * @property string $icon
 * @property string $built_in
 * @property string $live_update
 */
class Categories extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Categories';

    protected $fillable = ['id', 'name', 'type', 'applies_to', 'find_conditions', 'condition', 'front_page', 'position', 'counter_conditions', 'icon', 'built_in', 'live_update'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
