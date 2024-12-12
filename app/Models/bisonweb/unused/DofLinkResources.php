<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $dof_comments_id
 * @property int $dof_resources_id
 * @property bool $value
 */
class DofLinkResources extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Dof_Link_Resources';

    protected $fillable = ['id', 'dof_comments_id', 'dof_resources_id', 'value'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
