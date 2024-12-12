<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $label
 * @property string $code
 * @property int $is_active
 * @property int $is_locked
 */
class YardManagementResourceAction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Yard_Management_Resource_Action';

    protected $fillable = ['id', 'label', 'code', 'is_active', 'is_locked'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
