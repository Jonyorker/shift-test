<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $lgh_number
 * @property string $event
 * @property string $arrival
 * @property string $departure
 * @property string $trailer
 * @property int $pieces
 * @property int $weight
 * @property int $carrierlogin_id_old
 * @property string $updated
 * @property string $edited_by
 * @property string $edited_date
 * @property int $processed
 * @property int $id
 * @property string $latereason
 * @property int $trailerupdate
 * @property string $trailerlocation
 * @property string $carrierlogin_id
 * @property int $stp_number
 * @property int $in_couch
 */
class LgstCarrierStopUpdate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Lgst_CarrierStopUpdate';

    protected $fillable = ['lgh_number', 'event', 'arrival', 'departure', 'trailer', 'pieces', 'weight', 'carrierlogin_id_old', 'updated', 'edited_by', 'edited_date', 'processed', 'id', 'latereason', 'trailerupdate', 'trailerlocation', 'carrierlogin_id', 'stp_number', 'in_couch'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
