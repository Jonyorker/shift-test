<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $is_active
 */
class ReadAndSignVisible extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Read_And_Sign_Visible';

    protected $fillable = ['id', 'code', 'name', 'is_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
