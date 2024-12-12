<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $label
 * @property int $sort_order
 * @property int $is_active
 * @property int $is_required
 * @property string $code
 */
class HuddleResourceUserType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Huddle_Resource_User_Type';

    protected $fillable = ['id', 'label', 'sort_order', 'is_active', 'is_required', 'code'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
