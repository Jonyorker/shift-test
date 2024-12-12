<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $createdt
 * @property string $createby
 * @property int $leg1
 * @property int $mov1
 * @property int $leg2
 * @property int $mov2
 */
class BisonRounder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Rounder';

    protected $fillable = ['id', 'createdt', 'createby', 'leg1', 'mov1', 'leg2', 'mov2'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
