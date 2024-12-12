<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $read_and_sign_id
 * @property int $read_and_sign_tag_id
 */
class ReadAndSignTagLink extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Read_And_Sign_Tag_Link';

    protected $fillable = ['id', 'read_and_sign_id', 'read_and_sign_tag_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
