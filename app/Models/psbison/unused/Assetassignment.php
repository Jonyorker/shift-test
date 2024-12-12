<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $asgn_number
 * @property int $lgh_number
 * @property string $asgn_type
 * @property string $asgn_id
 * @property string $asgn_date
 * @property int $asgn_eventnumber
 * @property string $asgn_controlling
 * @property string $asgn_status
 * @property string $asgn_dispdate
 * @property string $asgn_enddate
 * @property string $asgn_dispmethod
 * @property int $mov_number
 * @property mixed $timestamp
 * @property string $pyd_status
 * @property string $actg_type
 * @property int $evt_number
 * @property int $asgn_trl_first_asgn
 * @property int $asgn_trl_last_asgn
 * @property int $last_evt_number
 * @property int $last_dne_evt_number
 * @property int $next_opn_evt_number
 * @property string $aa_nonprimary_asset
 * @property string $asgn_pay_usedate
 * @property string $asgn_pay_usedate_setting
 * @property string $fgt_number
 * @property string $asgn_branch
 * @property string $asgn_payto
 * @property string $termCode
 * @property int $PayScheduleId
 * @property int $asgn_pld_event
 * @property int $fgt_asset_order_id
 * @property string $INS_TIMESTAMP
 */
class Assetassignment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Assetassignment';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'asgn_number';

    protected $fillable = ['lgh_number', 'asgn_type', 'asgn_id', 'asgn_date', 'asgn_eventnumber', 'asgn_controlling', 'asgn_status', 'asgn_dispdate', 'asgn_enddate', 'asgn_dispmethod', 'mov_number', 'timestamp', 'pyd_status', 'actg_type', 'evt_number', 'asgn_trl_first_asgn', 'asgn_trl_last_asgn', 'last_evt_number', 'last_dne_evt_number', 'next_opn_evt_number', 'aa_nonprimary_asset', 'asgn_pay_usedate', 'asgn_pay_usedate_setting', 'fgt_number', 'asgn_branch', 'asgn_payto', 'termCode', 'PayScheduleId', 'asgn_pld_event', 'fgt_asset_order_id', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
