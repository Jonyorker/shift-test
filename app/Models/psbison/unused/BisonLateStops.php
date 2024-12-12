<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $stp_number
 * @property string $late_reasoncode
 * @property string $late_username
 * @property string $late_supcomment
 * @property int $late_emailsent
 * @property int $late_closed
 * @property string $late_custcomment
 * @property string $late_description
 * @property string $late_region
 * @property string $late_driver
 * @property string $late_schdtlatest
 * @property int $late_abl
 * @property string $late_carrier
 * @property string $late_fleet
 * @property string $late_dateadded
 * @property int $late_manual
 * @property string $late_owner
 * @property string $late_fault
 * @property int $late_escalation
 * @property int $late_custnotified
 * @property string $late_spoketo
 * @property string $late_equipment
 * @property string $late_noreason
 * @property string $late_notifysent
 * @property string $late_ablregion
 * @property int $late_bymasslrw
 */
class BisonLateStops extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_LateStops';

    protected $fillable = ['stp_number', 'late_reasoncode', 'late_username', 'late_supcomment', 'late_emailsent', 'late_closed', 'late_custcomment', 'late_description', 'late_region', 'late_driver', 'late_schdtlatest', 'late_abl', 'late_carrier', 'late_fleet', 'late_dateadded', 'late_manual', 'late_owner', 'late_fault', 'late_escalation', 'late_custnotified', 'late_spoketo', 'late_equipment', 'late_noreason', 'late_notifysent', 'late_ablregion', 'late_bymasslrw'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
