<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $reason
 * @property bool $is_active
 * @property bool $is_visible
 */
class EfsResourcesRejectedReasons extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Efs_Resources_Rejected_Reasons';

    protected $fillable = ['id', 'reason', 'is_active', 'is_visible'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
