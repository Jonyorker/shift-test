<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $label
 * @property string $value
 * @property string $dept_name
 * @property int $is_active
 * @property int $default_queue
 * @property int $is_close
 */
class ChatReasons extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chat_Reasons';

    protected $fillable = ['id', 'label', 'value', 'dept_name', 'is_active', 'default_queue', 'is_close'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
