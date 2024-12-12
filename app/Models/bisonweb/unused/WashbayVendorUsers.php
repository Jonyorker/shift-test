<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $vendor
 * @property string $terminal
 * @property string $password
 * @property string $last_login
 * @property string $description
 * @property int $is_show
 */
class WashbayVendorUsers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Washbay_Vendor_Users';

    protected $fillable = ['id', 'vendor', 'terminal', 'password', 'last_login', 'description', 'is_show'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
