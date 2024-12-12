<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $username
 * @property string $application_name
 * @property string $computer_name
 * @property string $nt_id
 * @property string $shared_key
 * @property string $expire_on
 * @property string $last_used
 */
class RbacApplicationTokens extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rbac_Application_Tokens';

    protected $fillable = ['id', 'username', 'application_name', 'computer_name', 'nt_id', 'shared_key', 'expire_on', 'last_used'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
