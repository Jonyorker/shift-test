<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $label
 * @property string $code
 * @property string $note
 * @property int $level
 * @property int $parent_id
 * @property int $is_active
 */
class HelpDeskResourcesCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Help_Desk_Resources_Category';

    protected $fillable = ['id', 'label', 'code', 'note', 'level', 'parent_id', 'is_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
