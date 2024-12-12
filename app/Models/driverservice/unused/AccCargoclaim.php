<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $acc_id
 * @property int $clm_id
 * @property string $clm_claimid
 * @property int $clm_closed
 * @property string $clm_datereport
 * @property string $clm_datedelivery
 * @property string $clm_dateintent
 * @property string $clm_dateclaim
 * @property int $clm_filedontime
 * @property int $ord_hdrnumber
 * @property string $ord_billto
 * @property string $ord_shipper
 * @property string $ord_consignee
 * @property string $clm_refnumbers
 * @property int $clm_pieces
 * @property float $clm_weight
 * @property int $clm_pallet
 * @property string $clm_typeofloss
 * @property string $clm_causeofloss
 * @property int $clm_declined
 * @property string $clm_commodity
 * @property int $clm_prg_drvrep
 * @property int $clm_prg_bol
 * @property int $clm_prg_claim
 * @property int $clm_prg_bisoninv
 * @property int $clm_prg_bid
 * @property int $clm_prg_slvgrpt
 * @property int $clm_prg_pmt
 * @property int $clm_prg_acct
 * @property int $clm_prg_mpi
 * @property int $clm_prg_rlse
 * @property int $clm_prg_appr
 * @property int $clm_prg_slvgrec
 * @property int $clm_prg_letdrv
 * @property string $clm_drivernoncomp
 * @property string $clm_denydate
 * @property string $clm_pickupdate
 * @property string $clm_datesentappr
 * @property string $clm_chqnum
 * @property string $clm_datepaid
 * @property string $clm_claimant
 * @property string $clm_dateclosed
 * @property string $mpp_id
 * @property string $clm_mpiclaim
 * @property string $clm_source
 * @property string $clm_trc
 * @property string $clm_trl1
 * @property string $clm_trl2
 * @property string $clm_lastupdate
 * @property string $clm_lastupdateby
 * @property int $clm_tp
 * @property int $clm_salvage
 * @property string $car_id
 */
class AccCargoclaim extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Acc_Cargoclaim';

    protected $fillable = ['acc_id', 'clm_id', 'clm_claimid', 'clm_closed', 'clm_datereport', 'clm_datedelivery', 'clm_dateintent', 'clm_dateclaim', 'clm_filedontime', 'ord_hdrnumber', 'ord_billto', 'ord_shipper', 'ord_consignee', 'clm_refnumbers', 'clm_pieces', 'clm_weight', 'clm_pallet', 'clm_typeofloss', 'clm_causeofloss', 'clm_declined', 'clm_commodity', 'clm_prg_drvrep', 'clm_prg_bol', 'clm_prg_claim', 'clm_prg_bisoninv', 'clm_prg_bid', 'clm_prg_slvgrpt', 'clm_prg_pmt', 'clm_prg_acct', 'clm_prg_mpi', 'clm_prg_rlse', 'clm_prg_appr', 'clm_prg_slvgrec', 'clm_prg_letdrv', 'clm_drivernoncomp', 'clm_denydate', 'clm_pickupdate', 'clm_datesentappr', 'clm_chqnum', 'clm_datepaid', 'clm_claimant', 'clm_dateclosed', 'mpp_id', 'clm_mpiclaim', 'clm_source', 'clm_trc', 'clm_trl1', 'clm_trl2', 'clm_lastupdate', 'clm_lastupdateby', 'clm_tp', 'clm_salvage', 'car_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
