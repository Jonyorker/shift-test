<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rbac_users_id
 * @property string $company_id
 * @property int $is_active
 * @property string $termination_date
 * @property string $created_date
 */
class RbacCompany extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Company';

    protected $fillable = ['id', 'rbac_users_id', 'company_id', 'is_active', 'termination_date', 'created_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
