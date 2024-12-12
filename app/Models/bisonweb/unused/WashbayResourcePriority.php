<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $sort_order
 * @property string $label
 * @property int $is_active
 * @property string $priority
 * @property int $tractor
 * @property int $trailer
 * @property int $combo
 */
class WashbayResourcePriority extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Washbay_Resource_Priority';

    protected $fillable = ['id', 'sort_order', 'label', 'is_active', 'priority', 'tractor', 'trailer', 'combo'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
