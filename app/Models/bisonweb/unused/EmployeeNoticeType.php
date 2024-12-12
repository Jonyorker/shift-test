<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type
 * @property string $slug
 * @property int $is_actionable
 * @property int $sort_order
 */
class EmployeeNoticeType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Employee_Notice_type';

    protected $fillable = ['id', 'type', 'slug', 'is_actionable', 'sort_order'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
