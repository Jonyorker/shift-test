<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $washbay_log_id
 * @property int $washbay_resource_priority_id
 */
class WashbayPriorities extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Washbay_Priorities';

    protected $fillable = ['id', 'washbay_log_id', 'washbay_resource_priority_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
