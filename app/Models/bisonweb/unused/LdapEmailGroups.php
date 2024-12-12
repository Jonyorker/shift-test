<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $domian
 * @property string $distinguished_name
 * @property string $members
 * @property int $APP_DIMS
 */
class LdapEmailGroups extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Ldap_Email_Groups';

    protected $fillable = ['id', 'name', 'email', 'domian', 'distinguished_name', 'members', 'APP_DIMS'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
