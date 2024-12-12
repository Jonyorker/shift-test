<?php

namespace App\Models\psbison;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $fgt_number
 * @property string $cmd_code
 * @property float $fgt_weight
 * @property string $fgt_weightunit
 * @property string $fgt_description
 * @property int $stp_number
 * @property float $fgt_count
 * @property string $fgt_countunit
 * @property float $fgt_volume
 * @property string $fgt_volumeunit
 * @property int $fgt_lowtemp
 * @property int $fgt_hitemp
 * @property int $fgt_sequence
 * @property float $fgt_length
 * @property string $fgt_lengthunit
 * @property float $fgt_height
 * @property string $fgt_heightunit
 * @property float $fgt_width
 * @property string $fgt_widthunit
 * @property mixed $timestamp
 * @property string $fgt_reftype
 * @property string $fgt_refnum
 * @property float $fgt_quantity
 * @property int $fgt_rate
 * @property int $fgt_charge
 * @property string $fgt_rateunit
 * @property string $cht_itemcode
 * @property string $cht_basisunit
 * @property string $fgt_unit
 * @property int $skip_trigger
 * @property float $tare_weight
 * @property string $tare_weightunit
 * @property float $fgt_pallets_in
 * @property float $fgt_pallets_out
 * @property float $fgt_pallets_on_trailer
 * @property float $fgt_carryins1
 * @property float $fgt_carryins2
 * @property string $fgt_stackable
 * @property float $fgt_ratingquantity
 * @property string $fgt_ratingunit
 * @property int $fgt_quantity_type
 * @property float $fgt_ordered_count
 * @property float $fgt_ordered_weight
 * @property int $tar_number
 * @property string $tar_tariffnumber
 * @property string $tar_tariffitem
 * @property int $fgt_charge_type
 * @property int $fgt_rate_type
 * @property float $fgt_ordered_volume
 * @property float $fgt_ordered_loadingmeters
 * @property string $fgt_pallet_type
 * @property float $fgt_loadingmeters
 * @property string $fgt_loadingmetersunit
 * @property string $fgt_additionl_description
 * @property float $fgt_specific_flashpoint
 * @property string $fgt_specific_flashpoint_unit
 * @property string $fgt_tmstatus
 * @property float $cpr_density
 * @property string $scm_subcode
 * @property string $fgt_terms
 * @property string $fgt_consignee
 * @property string $fgt_shipper
 * @property string $fgt_leg_origin
 * @property string $fgt_leg_dest
 * @property float $fgt_count2
 * @property string $fgt_count2unit
 * @property int $fgt_bolid
 * @property string $fgt_bol_status
 * @property string $fgt_osdreason
 * @property int $fgt_osdquantity
 * @property string $fgt_osdunit
 * @property string $fgt_osdcomment
 * @property string $fgt_packageunit
 * @property int $fgt_parentcmd_number
 * @property int $fgt_parentcmd_fgt_number
 * @property int $fgt_display_sequence
 * @property string $fgt_accountof
 * @property string $fgt_volume2unit
 * @property string $fgt_bol_image
 * @property string $fgt_bol_image_date
 * @property string $fgt_osdstatus
 * @property string $fgt_osdopendate
 * @property string $fgt_osdclosedate
 * @property int $fgt_osdorigclaimamount
 * @property int $fgt_osdamtpaid
 * @property int $fgt_osdamtreceived
 * @property float $fgt_dispatched_quantity
 * @property string $fgt_dispatched_unit
 * @property float $fgt_actual_quantity
 * @property string $fgt_actual_unit
 * @property float $fgt_billable_quantity
 * @property string $fgt_billable_unit
 * @property string $fgt_supplier
 * @property float $fgt_volume2
 * @property string $fgt_volumeunit2
 * @property string $tank_loc
 * @property string $fgt_pincode
 * @property float $fgt_deliverytank1
 * @property float $fgt_deliverytank2
 * @property float $fgt_deliverytank3
 * @property float $fgt_deliverytank4
 * @property float $fgt_deliverytank5
 * @property float $fgt_deliverytank6
 * @property float $fgt_deliverytank7
 * @property float $fgt_deliverytank8
 * @property float $fgt_deliverytank9
 * @property float $fgt_deliverytank10
 * @property string $fgt_asset
 * @property string $fgt_tempunit
 * @property int $fgt_number_copied_fromorder
 * @property string $fgt_hazmat_class_qualifier
 * @property string $fgt_hazmat_shipping_name_qualifier
 * @property float $fgt_size
 * @property int $order_hdrnumber
 * @property string $fgt_app_eqcodes
 * @property int $fgt_deficit_row
 * @property float $fgt_rate_per
 * @property float $fgt_sub_charge
 * @property float $fgt_discount_rate
 * @property float $fgt_discount_per
 * @property float $fgt_discount
 * @property float $fgt_gross_manual
 * @property int $fgt_disc_tar_number
 * @property float $fgt_discount_qty
 * @property string $cmd_rateclass
 * @property int $fgt_ShipperTankId
 * @property string $INS_TIMESTAMP
 */
class Freightdetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Freightdetail';

    protected $fillable = ['fgt_number', 'cmd_code', 'fgt_weight', 'fgt_weightunit', 'fgt_description', 'stp_number', 'fgt_count', 'fgt_countunit', 'fgt_volume', 'fgt_volumeunit', 'fgt_lowtemp', 'fgt_hitemp', 'fgt_sequence', 'fgt_length', 'fgt_lengthunit', 'fgt_height', 'fgt_heightunit', 'fgt_width', 'fgt_widthunit', 'timestamp', 'fgt_reftype', 'fgt_refnum', 'fgt_quantity', 'fgt_rate', 'fgt_charge', 'fgt_rateunit', 'cht_itemcode', 'cht_basisunit', 'fgt_unit', 'skip_trigger', 'tare_weight', 'tare_weightunit', 'fgt_pallets_in', 'fgt_pallets_out', 'fgt_pallets_on_trailer', 'fgt_carryins1', 'fgt_carryins2', 'fgt_stackable', 'fgt_ratingquantity', 'fgt_ratingunit', 'fgt_quantity_type', 'fgt_ordered_count', 'fgt_ordered_weight', 'tar_number', 'tar_tariffnumber', 'tar_tariffitem', 'fgt_charge_type', 'fgt_rate_type', 'fgt_ordered_volume', 'fgt_ordered_loadingmeters', 'fgt_pallet_type', 'fgt_loadingmeters', 'fgt_loadingmetersunit', 'fgt_additionl_description', 'fgt_specific_flashpoint', 'fgt_specific_flashpoint_unit', 'fgt_tmstatus', 'cpr_density', 'scm_subcode', 'fgt_terms', 'fgt_consignee', 'fgt_shipper', 'fgt_leg_origin', 'fgt_leg_dest', 'fgt_count2', 'fgt_count2unit', 'fgt_bolid', 'fgt_bol_status', 'fgt_osdreason', 'fgt_osdquantity', 'fgt_osdunit', 'fgt_osdcomment', 'fgt_packageunit', 'fgt_parentcmd_number', 'fgt_parentcmd_fgt_number', 'fgt_display_sequence', 'fgt_accountof', 'fgt_volume2unit', 'fgt_bol_image', 'fgt_bol_image_date', 'fgt_osdstatus', 'fgt_osdopendate', 'fgt_osdclosedate', 'fgt_osdorigclaimamount', 'fgt_osdamtpaid', 'fgt_osdamtreceived', 'fgt_dispatched_quantity', 'fgt_dispatched_unit', 'fgt_actual_quantity', 'fgt_actual_unit', 'fgt_billable_quantity', 'fgt_billable_unit', 'fgt_supplier', 'fgt_volume2', 'fgt_volumeunit2', 'tank_loc', 'fgt_pincode', 'fgt_deliverytank1', 'fgt_deliverytank2', 'fgt_deliverytank3', 'fgt_deliverytank4', 'fgt_deliverytank5', 'fgt_deliverytank6', 'fgt_deliverytank7', 'fgt_deliverytank8', 'fgt_deliverytank9', 'fgt_deliverytank10', 'fgt_asset', 'fgt_tempunit', 'fgt_number_copied_fromorder', 'fgt_hazmat_class_qualifier', 'fgt_hazmat_shipping_name_qualifier', 'fgt_size', 'order_hdrnumber', 'fgt_app_eqcodes', 'fgt_deficit_row', 'fgt_rate_per', 'fgt_sub_charge', 'fgt_discount_rate', 'fgt_discount_per', 'fgt_discount', 'fgt_gross_manual', 'fgt_disc_tar_number', 'fgt_discount_qty', 'cmd_rateclass', 'fgt_ShipperTankId', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
