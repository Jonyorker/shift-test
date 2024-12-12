<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $trc_number
 * @property mixed $timestamp
 * @property int $tar_number
 * @property string $trc_rowcolumn
 * @property int $trc_sequence
 * @property string $trc_matchvalue
 * @property int $trc_rangevalue
 * @property string $trc_multimatch
 * @property string $last_updateby
 * @property string $last_updatedate
 * @property string $trc_rateasflat
 */
class Tariffrowcolumn extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Tariffrowcolumn';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'trc_number';

    protected $fillable = ['timestamp', 'tar_number', 'trc_rowcolumn', 'trc_sequence', 'trc_matchvalue', 'trc_rangevalue', 'trc_multimatch', 'last_updateby', 'last_updatedate', 'trc_rateasflat'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
