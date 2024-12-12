<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $domain_account
 * @property string $full_name
 * @property string $first_name
 * @property string $last_name
 */
class WindowDomainUsers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Window_Domain_Users';

    protected $fillable = ['domain_account', 'full_name', 'first_name', 'last_name'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
