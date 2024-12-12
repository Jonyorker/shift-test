<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $label
 * @property string $code
 * @property int $parent_id
 * @property int $sort_order
 * @property string $addon_type
 * @property int $clone_id
 * @property int $is_active
 */
class EqptReadLabel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Eqpt_Read_Label';

    protected $fillable = ['id', 'label', 'code', 'parent_id', 'sort_order', 'addon_type', 'clone_id', 'is_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
