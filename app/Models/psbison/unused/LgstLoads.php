<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $load_number
 * @property int $lgh_number
 * @property int $ord_hdrnumber
 * @property string $ord_billto
 * @property string $ord_billtoname
 * @property string $lgh_carrier
 * @property string $load_carriername
 * @property string $load_contact
 * @property string $load_fax
 * @property float $load_linehaul
 * @property float $load_fsc
 * @property float $load_partialcost
 * @property float $load_remaintotal
 * @property float $load_sublinehaul
 * @property float $load_subfsc
 * @property float $load_subtotal
 * @property float $load_netrevenue
 * @property string $load_ponumber
 * @property string $load_customsbroker
 * @property string $load_instructions
 * @property string $load_createby
 * @property string $load_createdate
 * @property string $load_status
 * @property string $load_notes
 * @property string $load_trailer
 * @property int $load_pieces
 * @property float $load_weight
 * @property int $load_faxsent
 * @property int $mov_number
 * @property float $load_accessorial
 * @property float $load_extrapu
 * @property float $load_extradrop
 * @property string $load_lastloc
 * @property string $load_lastdate
 * @property float $load_bisonportion
 * @property int $load_infomissing
 * @property int $load_faxback
 * @property string $load_faxsentdate
 * @property string $load_faxsentby
 * @property int $load_loadissue
 * @property string $load_carriertrlnum
 * @property string $load_carriertracingnum
 * @property string $load_completed
 * @property string $load_faxrevised
 * @property string $load_faxrevisedby
 * @property string $load_startcity
 * @property string $load_endcity
 * @property string $load_startdate
 * @property string $load_enddate
 * @property int $load_lostorder
 * @property string $load_tpikePO
 * @property string $load_issuenotes
 * @property float $load_transfercost
 * @property float $load_sublinehaul_US
 * @property float $load_accessorial_US
 * @property float $load_subfsc_US
 * @property float $load_extrapu_US
 * @property float $load_extradrop_US
 * @property int $load_currency_US
 * @property float $load_bisonFSCportion
 * @property float $load_assetcost
 * @property string $load_checkcallsent
 * @property string $load_carriercomment
 * @property string $load_carrierstatus
 * @property int $load_bisoncarriercode
 * @property string $load_transferon
 * @property string $load_transferby
 * @property int $load_trailermissing
 * @property int $load_tractorinterchange
 * @property int $load_signedfax
 * @property float $load_emptymilescost
 * @property float $load_emptymilescost_us
 * @property float $load_emptymiles
 * @property int $load_reloadavail
 * @property string $load_converted
 * @property string $load_pod
 * @property int $load_poweronly
 * @property int $load_isfmp
 * @property string $load_negrevreason
 */
class LgstLoads extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Lgst_Loads';

    protected $fillable = ['load_number', 'lgh_number', 'ord_hdrnumber', 'ord_billto', 'ord_billtoname', 'lgh_carrier', 'load_carriername', 'load_contact', 'load_fax', 'load_linehaul', 'load_fsc', 'load_partialcost', 'load_remaintotal', 'load_sublinehaul', 'load_subfsc', 'load_subtotal', 'load_netrevenue', 'load_ponumber', 'load_customsbroker', 'load_instructions', 'load_createby', 'load_createdate', 'load_status', 'load_notes', 'load_trailer', 'load_pieces', 'load_weight', 'load_faxsent', 'mov_number', 'load_accessorial', 'load_extrapu', 'load_extradrop', 'load_lastloc', 'load_lastdate', 'load_bisonportion', 'load_infomissing', 'load_faxback', 'load_faxsentdate', 'load_faxsentby', 'load_loadissue', 'load_carriertrlnum', 'load_carriertracingnum', 'load_completed', 'load_faxrevised', 'load_faxrevisedby', 'load_startcity', 'load_endcity', 'load_startdate', 'load_enddate', 'load_lostorder', 'load_tpikePO', 'load_issuenotes', 'load_transfercost', 'load_sublinehaul_US', 'load_accessorial_US', 'load_subfsc_US', 'load_extrapu_US', 'load_extradrop_US', 'load_currency_US', 'load_bisonFSCportion', 'load_assetcost', 'load_checkcallsent', 'load_carriercomment', 'load_carrierstatus', 'load_bisoncarriercode', 'load_transferon', 'load_transferby', 'load_trailermissing', 'load_tractorinterchange', 'load_signedfax', 'load_emptymilescost', 'load_emptymilescost_us', 'load_emptymiles', 'load_reloadavail', 'load_converted', 'load_pod', 'load_poweronly', 'load_isfmp', 'load_negrevreason'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
