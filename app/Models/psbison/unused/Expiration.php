<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $exp_key
 * @property int $carriercsalogdtl_id
 * @property string $exp_idtype
 * @property string $exp_id
 * @property string $exp_code
 * @property string $exp_lastdate
 * @property string $exp_expirationdate
 * @property string $exp_routeto
 * @property string $exp_completed
 * @property string $exp_priority
 * @property string $exp_compldate
 * @property mixed $timestamp
 * @property string $exp_updateby
 * @property string $exp_creatdate
 * @property string $exp_updateon
 * @property string $exp_description
 * @property int $exp_milestoexp
 * @property int $exp_city
 * @property string $bis_leavereason
 * @property string $bis_quit
 * @property int $bis_rehire
 * @property int $mov_number
 * @property string $exp_control_avl_date
 * @property int $skip_trigger
 * @property string $exp_auto_created
 * @property string $exp_source
 * @property int $cai_id
 * @property int $exp_duration
 * @property string $exp_acceptable_start
 * @property string $exp_acceptable_end
 * @property string $exp_recurrence
 * @property int $trlStgID
 * @property string $INS_TIMESTAMP
 */
class Expiration extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Expiration';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'exp_key';

    protected $fillable = ['carriercsalogdtl_id', 'exp_idtype', 'exp_id', 'exp_code', 'exp_lastdate', 'exp_expirationdate', 'exp_routeto', 'exp_completed', 'exp_priority', 'exp_compldate', 'timestamp', 'exp_updateby', 'exp_creatdate', 'exp_updateon', 'exp_description', 'exp_milestoexp', 'exp_city', 'bis_leavereason', 'bis_quit', 'bis_rehire', 'mov_number', 'exp_control_avl_date', 'skip_trigger', 'exp_auto_created', 'exp_source', 'cai_id', 'exp_duration', 'exp_acceptable_start', 'exp_acceptable_end', 'exp_recurrence', 'trlStgID', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
