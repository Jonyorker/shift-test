<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $label
 * @property string $code
 * @property int $is_active
 * @property int $component_id
 * @property int $bison_edvirmapping_id
 */
class YardManagementResourceComponentDefects extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Yard_Management_Resource_Component_Defects';

    protected $fillable = ['id', 'label', 'code', 'is_active', 'component_id', 'bison_edvirmapping_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
