<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $xserver_name
 * @property string $xdttm_ins
 * @property string $xdttm_last_ins_upd
 * @property int $xfallback_dbid
 * @property string $name
 * @property int $dbid
 * @property int $status
 * @property int $version
 */
class SptFallbackDb extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Spt_Fallback_Db';

    protected $fillable = ['xserver_name', 'xdttm_ins', 'xdttm_last_ins_upd', 'xfallback_dbid', 'name', 'dbid', 'status', 'version'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
