<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $exp_code
 * @property int $number_of_days
 */
class ExpirationNotify extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Expiration_Notify';

    protected $fillable = ['id', 'exp_code', 'number_of_days'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
