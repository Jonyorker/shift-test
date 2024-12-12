<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $decription
 * @property string $created_date
 * @property int $is_active
 * @property string $updated_date
 * @property bool $is_app
 */
class RbacProducts extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Products';

    protected $fillable = ['id', 'name', 'decription', 'created_date', 'is_active', 'updated_date', 'is_app'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
