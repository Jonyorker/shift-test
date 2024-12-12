<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $sch_id
 * @property string $mpp_id
 * @property string $sch_type
 * @property string $sch_apptdate
 * @property string $sch_location
 * @property string $sch_reason
 * @property string $sch_availdate
 * @property string $sch_enterby
 * @property string $sch_enterdate
 * @property string $sch_startrange
 * @property string $sch_endrange
 * @property string $sch_status
 * @property string $crs_id
 * @property int $cls_id
 */
class BisonDrvschedule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Drvschedule';

    protected $fillable = ['sch_id', 'mpp_id', 'sch_type', 'sch_apptdate', 'sch_location', 'sch_reason', 'sch_availdate', 'sch_enterby', 'sch_enterdate', 'sch_startrange', 'sch_endrange', 'sch_status', 'crs_id', 'cls_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
