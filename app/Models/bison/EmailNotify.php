<?php

namespace App\Models\bison;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $address
 * @property string $subject
 * @property string $message
 * @property string $data
 * @property string $onbehalfof
 */
class EmailNotify extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'email_notify';

    protected $fillable = ['id', 'address', 'subject', 'message', 'data', 'onbehalfof'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bison';
}
