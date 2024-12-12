<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $element_name
 * @property string $description
 */
class Elements extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Elements';

    protected $fillable = ['id', 'element_name', 'description'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
