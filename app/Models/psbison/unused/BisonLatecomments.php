<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $stp_number
 * @property string $cmtby
 * @property string $cmtdate
 * @property string $cmttext
 * @property string $cmttype
 * @property string $spoketo
 */
class BisonLatecomments extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Latecomments';

    protected $fillable = ['id', 'stp_number', 'cmtby', 'cmtdate', 'cmttext', 'cmttype', 'spoketo'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
