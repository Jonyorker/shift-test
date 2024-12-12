<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $rbac_product_id
 * @property string $version
 * @property string $date_created
 * @property string $date_expired
 */
class RbacProductsVersions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Products_Versions';

    protected $fillable = ['id', 'rbac_product_id', 'version', 'date_created', 'date_expired'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
