<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $label
 */
class DofResources extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Dof_Resources';

    protected $fillable = ['id', 'code', 'label'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
