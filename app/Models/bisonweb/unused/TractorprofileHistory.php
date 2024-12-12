<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $snapshot_date
 * @property string $trc_number
 * @property string $trc_fleet
 * @property string $trc_type1
 * @property string $trc_type2
 * @property string $trc_type3
 * @property string $trc_type4
 */
class TractorprofileHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Tractorprofile_History';

    protected $fillable = ['snapshot_date', 'trc_number', 'trc_fleet', 'trc_type1', 'trc_type2', 'trc_type3', 'trc_type4'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
