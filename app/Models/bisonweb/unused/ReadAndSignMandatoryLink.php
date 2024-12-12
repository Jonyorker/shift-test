<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $read_and_sign_id
 * @property string $department_code
 */
class ReadAndSignMandatoryLink extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Read_And_Sign_Mandatory_Link';

    protected $fillable = ['id', 'read_and_sign_id', 'department_code'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
