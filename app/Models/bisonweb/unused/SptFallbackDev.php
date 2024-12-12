<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $xserver_name
 * @property string $xdttm_ins
 * @property string $xdttm_last_ins_upd
 * @property int $xfallback_low
 * @property string $xfallback_drive
 * @property int $low
 * @property int $high
 * @property int $status
 * @property string $name
 * @property string $phyname
 */
class SptFallbackDev extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Spt_Fallback_Dev';

    protected $fillable = ['xserver_name', 'xdttm_ins', 'xdttm_last_ins_upd', 'xfallback_low', 'xfallback_drive', 'low', 'high', 'status', 'name', 'phyname'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
