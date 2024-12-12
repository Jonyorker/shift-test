<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $xserver_name
 * @property string $xdttm_ins
 * @property string $xdttm_last_ins_upd
 * @property int $xfallback_vstart
 * @property int $dbid
 * @property int $segmap
 * @property int $lstart
 * @property int $sizepg
 * @property int $vstart
 */
class SptFallbackUsg extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Spt_Fallback_Usg';

    protected $fillable = ['xserver_name', 'xdttm_ins', 'xdttm_last_ins_upd', 'xfallback_vstart', 'dbid', 'segmap', 'lstart', 'sizepg', 'vstart'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
