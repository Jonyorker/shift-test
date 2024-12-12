<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ivh_hdrnumber
 * @property int $ivd_number
 * @property int $stp_number
 * @property string $ivd_description
 * @property string $cht_itemcode
 * @property float $ivd_quantity
 * @property int $ivd_rate
 * @property int $ivd_charge
 * @property string $ivd_taxable1
 * @property string $ivd_taxable2
 * @property string $ivd_taxable3
 * @property string $ivd_taxable4
 * @property string $ivd_unit
 * @property string $cur_code
 * @property string $ivd_currencydate
 * @property string $ivd_glnum
 * @property int $ord_hdrnumber
 * @property string $ivd_type
 * @property string $ivd_rateunit
 * @property string $ivd_billto
 * @property float $ivd_itemquantity
 * @property int $ivd_subtotalptr
 * @property int $ivd_allocatedrev
 * @property int $ivd_sequence
 * @property string $ivd_invoicestatus
 * @property int $mfh_hdrnumber
 * @property string $ivd_refnum
 * @property string $cmd_code
 * @property string $cmp_id
 * @property float $ivd_distance
 * @property string $ivd_distunit
 * @property float $ivd_wgt
 * @property string $ivd_wgtunit
 * @property float $ivd_count
 * @property string $ivd_countunit
 * @property int $evt_number
 * @property string $ivd_reftype
 * @property float $ivd_volume
 * @property string $ivd_volunit
 * @property string $ivd_orig_cmpid
 * @property string $timestamp
 * @property int $ivd_payrevenue
 * @property int $ivd_sign
 * @property int $ivd_length
 * @property string $ivd_lengthunit
 * @property int $ivd_width
 * @property string $ivd_widthunit
 * @property int $ivd_height
 * @property string $ivd_heightunit
 * @property string $ivd_exportstatus
 * @property string $cht_basisunit
 * @property string $ivd_remark
 * @property int $tar_number
 * @property string $tar_tariffnumber
 * @property string $tar_tariffitem
 * @property string $ivd_fromord
 * @property string $ivd_zipcode
 * @property int $ivd_quantity_type
 * @property string $cht_class
 * @property string $ivd_mileagetable
 * @property int $ivd_charge_type
 * @property string $ivd_trl_rent
 * @property string $ivd_trl_rent_start
 * @property string $ivd_trl_rent_end
 * @property int $ivd_rate_type
 * @property string $last_updateby
 * @property string $last_updatedate
 * @property string $ivd_revtype1
 * @property string $cht_lh_min
 * @property string $cht_lh_rev
 * @property string $cht_lh_stl
 * @property string $cht_lh_rpt
 * @property int $cht_rollintolh
 * @property string $cht_lh_prn
 * @property int $fgt_number
 * @property int $ivd_paylgh_number
 * @property string $ivd_tariff_type
 * @property string $ivd_taxid
 * @property float $ivd_ordered_volume
 * @property float $ivd_ordered_loadingmeters
 * @property float $ivd_ordered_count
 * @property float $ivd_ordered_weight
 * @property float $ivd_loadingmeters
 * @property string $ivd_loadingmeters_unit
 * @property string $ivd_hide
 * @property float $ivd_baserate
 * @property float $ivd_rawcharge
 * @property float $ivd_oradjustment
 * @property float $ivd_cbadjustment
 * @property float $ivd_fsc
 * @property string $ivd_splitbillratetype
 * @property int $ivd_bolid
 * @property float $ivd_shared_wgt
 * @property string $ivd_ARTaxAuth
 * @property int $ivd_tollcost
 * @property int $ivd_miscmoney1
 * @property string $ivd_billable_flag
 * @property string $ivd_post_invoice
 * @property string $ivd_paid_indicator
 * @property int $ivd_paid_amount
 * @property float $ivd_actual_quantity
 * @property string $ivd_actual_unit
 * @property int $ivd_tax_basis
 * @property float $ivd_loaded_distance
 * @property float $ivd_empty_distance
 * @property string $fgt_supplier
 * @property string $ivd_showas_cmpid
 * @property int $ivd_leaseassetid
 * @property string $ivd_MaskFromRating
 * @property int $ivd_car_key
 * @property string $ivd_ord_number
 * @property float $ivd_allocated_quantity
 * @property int $ivd_allocated_rate
 * @property int $ivd_allocated_charge
 * @property int $ivd_allocated_ivd_number
 * @property int $dbsd_id_tariff
 * @property string $ivd_allocation_type
 * @property float $ivd_allocated_qty
 * @property int $ivd_reconcile_tariff
 * @property string $ivd_comment
 * @property string $ivd_transdate
 * @property string $ivd_branch
 * @property string $ivd_delays
 * @property mixed $dw_timestamp
 * @property float $ivd_rate_factor
 * @property int $ivd_ico_pyd_number_parent
 * @property string $ivd_description_type
 * @property float $ivd_rated_qty
 * @property int $ivd_rated_rate
 * @property int $dbst_rollinto_tar
 * @property string $ivd_customer_char1
 * @property string $ivd_billdate
 * @property float $ivd_pallets
 * @property string $ivd_palletunits
 * @property string $cmd_NMFC_class
 * @property string $cmd_NMFC_rate_class
 * @property int $deficit_row
 * @property float $ivd_rate_per
 * @property float $ivd_sub_charge
 * @property float $ivd_discount_rate
 * @property float $ivd_discount
 * @property int $disc_tar_number
 * @property float $ivd_discount_qty
 * @property float $ivd_discount_per
 * @property string $ivd_definition
 * @property string $INS_TIMESTAMP
 */
class Invoicedetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Invoicedetail';

    protected $fillable = ['ivh_hdrnumber', 'ivd_number', 'stp_number', 'ivd_description', 'cht_itemcode', 'ivd_quantity', 'ivd_rate', 'ivd_charge', 'ivd_taxable1', 'ivd_taxable2', 'ivd_taxable3', 'ivd_taxable4', 'ivd_unit', 'cur_code', 'ivd_currencydate', 'ivd_glnum', 'ord_hdrnumber', 'ivd_type', 'ivd_rateunit', 'ivd_billto', 'ivd_itemquantity', 'ivd_subtotalptr', 'ivd_allocatedrev', 'ivd_sequence', 'ivd_invoicestatus', 'mfh_hdrnumber', 'ivd_refnum', 'cmd_code', 'cmp_id', 'ivd_distance', 'ivd_distunit', 'ivd_wgt', 'ivd_wgtunit', 'ivd_count', 'ivd_countunit', 'evt_number', 'ivd_reftype', 'ivd_volume', 'ivd_volunit', 'ivd_orig_cmpid', 'timestamp', 'ivd_payrevenue', 'ivd_sign', 'ivd_length', 'ivd_lengthunit', 'ivd_width', 'ivd_widthunit', 'ivd_height', 'ivd_heightunit', 'ivd_exportstatus', 'cht_basisunit', 'ivd_remark', 'tar_number', 'tar_tariffnumber', 'tar_tariffitem', 'ivd_fromord', 'ivd_zipcode', 'ivd_quantity_type', 'cht_class', 'ivd_mileagetable', 'ivd_charge_type', 'ivd_trl_rent', 'ivd_trl_rent_start', 'ivd_trl_rent_end', 'ivd_rate_type', 'last_updateby', 'last_updatedate', 'ivd_revtype1', 'cht_lh_min', 'cht_lh_rev', 'cht_lh_stl', 'cht_lh_rpt', 'cht_rollintolh', 'cht_lh_prn', 'fgt_number', 'ivd_paylgh_number', 'ivd_tariff_type', 'ivd_taxid', 'ivd_ordered_volume', 'ivd_ordered_loadingmeters', 'ivd_ordered_count', 'ivd_ordered_weight', 'ivd_loadingmeters', 'ivd_loadingmeters_unit', 'ivd_hide', 'ivd_baserate', 'ivd_rawcharge', 'ivd_oradjustment', 'ivd_cbadjustment', 'ivd_fsc', 'ivd_splitbillratetype', 'ivd_bolid', 'ivd_shared_wgt', 'ivd_ARTaxAuth', 'ivd_tollcost', 'ivd_miscmoney1', 'ivd_billable_flag', 'ivd_post_invoice', 'ivd_paid_indicator', 'ivd_paid_amount', 'ivd_actual_quantity', 'ivd_actual_unit', 'ivd_tax_basis', 'ivd_loaded_distance', 'ivd_empty_distance', 'fgt_supplier', 'ivd_showas_cmpid', 'ivd_leaseassetid', 'ivd_MaskFromRating', 'ivd_car_key', 'ivd_ord_number', 'ivd_allocated_quantity', 'ivd_allocated_rate', 'ivd_allocated_charge', 'ivd_allocated_ivd_number', 'dbsd_id_tariff', 'ivd_allocation_type', 'ivd_allocated_qty', 'ivd_reconcile_tariff', 'ivd_comment', 'ivd_transdate', 'ivd_branch', 'ivd_delays', 'dw_timestamp', 'ivd_rate_factor', 'ivd_ico_pyd_number_parent', 'ivd_description_type', 'ivd_rated_qty', 'ivd_rated_rate', 'dbst_rollinto_tar', 'ivd_customer_char1', 'ivd_billdate', 'ivd_pallets', 'ivd_palletunits', 'cmd_NMFC_class', 'cmd_NMFC_rate_class', 'deficit_row', 'ivd_rate_per', 'ivd_sub_charge', 'ivd_discount_rate', 'ivd_discount', 'disc_tar_number', 'ivd_discount_qty', 'ivd_discount_per', 'ivd_definition', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
