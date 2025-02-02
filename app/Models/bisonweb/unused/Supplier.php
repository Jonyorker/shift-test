<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $api_key
 * @property string $created_date
 * @property int $is_active
 * @property string $company
 * @property string $role
 * @property string $emp_id
 */
class Supplier extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Supplier';

    protected $fillable = ['id', 'name', 'email', 'password', 'api_key', 'created_date', 'is_active', 'company', 'role', 'emp_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
