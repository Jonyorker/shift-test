<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $mpp_id
 * @property string $fleet
 * @property string $location
 * @property string $date
 * @property string $pta
 * @property string $reason
 * @property string $submit_date
 * @property string $status
 * @property string $update_by
 * @property string $updated_date
 * @property string $note
 * @property int $pta_id
 */
class BisonDrvscheduleRequests extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Drvschedule_Requests';

    protected $fillable = ['mpp_id', 'fleet', 'location', 'date', 'pta', 'reason', 'submit_date', 'status', 'update_by', 'updated_date', 'note', 'pta_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
