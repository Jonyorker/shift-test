<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $rgh_number
 * @property int $rgh_type
 * @property string $rgh_id
 * @property string $rgh_name
 * @property mixed $timestamp
 * @property string $INS_TIMESTAMP
 */
class Regionheader extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Regionheader';

    protected $fillable = ['rgh_number', 'rgh_type', 'rgh_id', 'rgh_name', 'timestamp', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
