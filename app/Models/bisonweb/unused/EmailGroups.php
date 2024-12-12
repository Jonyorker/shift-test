<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $domain
 * @property string $created_date
 * @property string $modified_date
 * @property int $member_count
 * @property bool $is_active
 */
class EmailGroups extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Email_Groups';

    protected $fillable = ['id', 'name', 'email', 'domain', 'created_date', 'modified_date', 'member_count', 'is_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
