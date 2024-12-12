<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $ord
 * @property int $length
 * @property int $width
 * @property int $height
 * @property int $cnt
 * @property string $cmt
 * @property int $splitord
 * @property int $weight
 */
class BisonltlDimensions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonltl_Dimensions';

    protected $fillable = ['id', 'ord', 'length', 'width', 'height', 'cnt', 'cmt', 'splitord', 'weight'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
