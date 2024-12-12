<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $pyd_atd_id
 * @property int $pyd_smwld_id
 * @property string $timestamp
 * @property int $pyd_number
 * @property int $pyh_number
 * @property int $lgh_number
 * @property int $asgn_number
 * @property string $asgn_type
 * @property string $asgn_id
 * @property int $ivd_number
 * @property string $pyd_prorap
 * @property string $pyd_payto
 * @property string $pyt_itemcode
 * @property int $mov_number
 * @property string $pyd_description
 * @property string $pyr_ratecode
 * @property float $pyd_quantity
 * @property string $pyd_rateunit
 * @property string $pyd_unit
 * @property int $pyd_rate
 * @property int $pyd_amount
 * @property string $pyd_pretax
 * @property string $pyd_glnum
 * @property string $pyd_currency
 * @property string $pyd_currencydate
 * @property string $pyd_status
 * @property string $pyd_refnumtype
 * @property string $pyd_refnum
 * @property string $pyh_payperiod
 * @property string $pyd_workperiod
 * @property string $lgh_startpoint
 * @property int $lgh_startcity
 * @property string $lgh_endpoint
 * @property int $lgh_endcity
 * @property int $ivd_payrevenue
 * @property float $pyd_revenueratio
 * @property int $pyd_lessrevenue
 * @property int $pyd_payrevenue
 * @property string $pyd_transdate
 * @property int $pyd_minus
 * @property int $pyd_sequence
 * @property int $std_number
 * @property string $pyd_loadstate
 * @property int $pyd_xrefnumber
 * @property int $ord_hdrnumber
 * @property int $pyt_fee1
 * @property int $pyt_fee2
 * @property int $pyd_grossamount
 * @property string $pyd_adj_flag
 * @property string $pyd_updatedby
 * @property int $psd_id
 * @property string $pyd_transferdate
 * @property string $pyd_exportstatus
 * @property string $pyd_releasedby
 * @property string $cht_itemcode
 * @property int $pyd_billedweight
 * @property string $tar_tarriffnumber
 * @property string $psd_batch_id
 * @property string $pyd_updsrc
 * @property string $pyd_updatedon
 * @property int $pyd_offsetpay_number
 * @property string $pyd_credit_pay_flag
 * @property int $pyd_ivh_hdrnumber
 * @property int $psd_number
 * @property string $pyd_ref_invoice
 * @property string $pyd_ref_invoicedate
 * @property string $pyd_ignoreglreset
 * @property int $pyd_PostProcSource
 * @property string $pyd_authcode
 * @property string $pyd_GPTrans
 * @property string $cac_id
 * @property string $ccc_id
 * @property string $pyd_hourlypaydate
 * @property string $pyd_isdefault
 * @property int $pyd_mbtaxableamount
 * @property int $pyd_nttaxableamount
 * @property string $pyd_maxquantity_used
 * @property string $pyd_maxcharge_used
 * @property int $std_number_adj
 * @property string $pyd_vendortopay
 * @property string $pyd_carinvnum
 * @property string $pyd_carinvdate
 * @property string $pyd_vendorpay
 * @property string $pyd_remarks
 * @property string $pyd_perdiem_exceeded
 * @property int $stp_number
 * @property int $stp_mfh_sequence
 * @property string $pyd_payment_date
 * @property string $pyd_payment_doc_number
 * @property string $pyd_carrierinvoice_aprv
 * @property string $pyd_carrierinvoice_rjct
 * @property string $pyd__aprv_rjct_comment
 * @property string $pyd_paid_indicator
 * @property int $pyd_paid_amount
 * @property string $pyd_expresscode
 * @property string $pyd_createdby
 * @property string $pyd_createdon
 * @property int $stp_number_pacos
 * @property int $pyd_gst_amount
 * @property int $pyd_gst_flag
 * @property string $pyd_mileagetable
 * @property string $pyt_otflag
 * @property string $bill_override
 * @property string $not_billed_reason
 * @property string $pyd_ap_check_date
 * @property string $pyd_ap_check_number
 * @property float $pyd_ap_check_amount
 * @property string $pyd_ap_vendor_id
 * @property string $pyd_ap_updated_by
 * @property float $pyd_reg_time_qty
 * @property int $pyd_advstdnum
 * @property string $pyd_min_period
 * @property string $crd_cardnumber
 * @property string $pyd_ap_voucher_nbr
 * @property string $pyd_workcycle_status
 * @property string $pyd_workcycle_description
 * @property float $pyd_thirdparty_split_percent
 * @property string $pyd_basis
 * @property string $pyd_basisunit
 * @property string $pyd_branch_override
 * @property string $pyd_billtype_changereason
 * @property string $pyd_branch
 * @property string $pyd_delays
 * @property int $pyd_reg_time_pydnum
 * @property int $pyd_overlimit
 * @property int $pyd_totaladvanced
 * @property float $pyd_coowner_split_percent
 * @property string $pyd_coowner_split_adj
 * @property int $pyd_report_quantity
 * @property int $pyd_report_rate
 * @property int $pyd_tprsplit_number
 * @property int $pyd_tprdiffbtw_number
 * @property int $RecurringAdjustmentDetailId
 * @property int $pyd_parent_pyd_number
 * @property string $pyd_orig_currency
 * @property int $pyd_orig_amount
 * @property int $pyd_cex_rate
 * @property float $pyd_rate_factor
 * @property string $pyd_fixedRate
 * @property string $pyd_fixedQty
 * @property string $pyd_fixedAmount
 * @property int $pyd_ico_ivd_number_child
 * @property string $std_purchase_date
 * @property string $std_purchase_tax_state
 * @property int $pyd_tax_originator_pyd_number
 * @property string $pyd_clock_start
 * @property string $pyd_clock_end
 * @property string $pyd_lghtype1
 * @property string $pyd_RemitToVendorID
 * @property int $pyd_pair
 * @property string $termCode
 * @property bool $pyd_reconcile
 * @property int $PayScheduleId
 * @property bool $ExcludeGuaranteePay
 * @property string $INS_TIMESTAMP
 * @property mixed $DW_TIMESTAMP
 */
class Paydetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Paydetail';

    protected $fillable = ['pyd_atd_id', 'pyd_smwld_id', 'timestamp', 'pyd_number', 'pyh_number', 'lgh_number', 'asgn_number', 'asgn_type', 'asgn_id', 'ivd_number', 'pyd_prorap', 'pyd_payto', 'pyt_itemcode', 'mov_number', 'pyd_description', 'pyr_ratecode', 'pyd_quantity', 'pyd_rateunit', 'pyd_unit', 'pyd_rate', 'pyd_amount', 'pyd_pretax', 'pyd_glnum', 'pyd_currency', 'pyd_currencydate', 'pyd_status', 'pyd_refnumtype', 'pyd_refnum', 'pyh_payperiod', 'pyd_workperiod', 'lgh_startpoint', 'lgh_startcity', 'lgh_endpoint', 'lgh_endcity', 'ivd_payrevenue', 'pyd_revenueratio', 'pyd_lessrevenue', 'pyd_payrevenue', 'pyd_transdate', 'pyd_minus', 'pyd_sequence', 'std_number', 'pyd_loadstate', 'pyd_xrefnumber', 'ord_hdrnumber', 'pyt_fee1', 'pyt_fee2', 'pyd_grossamount', 'pyd_adj_flag', 'pyd_updatedby', 'psd_id', 'pyd_transferdate', 'pyd_exportstatus', 'pyd_releasedby', 'cht_itemcode', 'pyd_billedweight', 'tar_tarriffnumber', 'psd_batch_id', 'pyd_updsrc', 'pyd_updatedon', 'pyd_offsetpay_number', 'pyd_credit_pay_flag', 'pyd_ivh_hdrnumber', 'psd_number', 'pyd_ref_invoice', 'pyd_ref_invoicedate', 'pyd_ignoreglreset', 'pyd_PostProcSource', 'pyd_authcode', 'pyd_GPTrans', 'cac_id', 'ccc_id', 'pyd_hourlypaydate', 'pyd_isdefault', 'pyd_mbtaxableamount', 'pyd_nttaxableamount', 'pyd_maxquantity_used', 'pyd_maxcharge_used', 'std_number_adj', 'pyd_vendortopay', 'pyd_carinvnum', 'pyd_carinvdate', 'pyd_vendorpay', 'pyd_remarks', 'pyd_perdiem_exceeded', 'stp_number', 'stp_mfh_sequence', 'pyd_payment_date', 'pyd_payment_doc_number', 'pyd_carrierinvoice_aprv', 'pyd_carrierinvoice_rjct', 'pyd__aprv_rjct_comment', 'pyd_paid_indicator', 'pyd_paid_amount', 'pyd_expresscode', 'pyd_createdby', 'pyd_createdon', 'stp_number_pacos', 'pyd_gst_amount', 'pyd_gst_flag', 'pyd_mileagetable', 'pyt_otflag', 'bill_override', 'not_billed_reason', 'pyd_ap_check_date', 'pyd_ap_check_number', 'pyd_ap_check_amount', 'pyd_ap_vendor_id', 'pyd_ap_updated_by', 'pyd_reg_time_qty', 'pyd_advstdnum', 'pyd_min_period', 'crd_cardnumber', 'pyd_ap_voucher_nbr', 'pyd_workcycle_status', 'pyd_workcycle_description', 'pyd_thirdparty_split_percent', 'pyd_basis', 'pyd_basisunit', 'pyd_branch_override', 'pyd_billtype_changereason', 'pyd_branch', 'pyd_delays', 'pyd_reg_time_pydnum', 'pyd_overlimit', 'pyd_totaladvanced', 'pyd_coowner_split_percent', 'pyd_coowner_split_adj', 'pyd_report_quantity', 'pyd_report_rate', 'pyd_tprsplit_number', 'pyd_tprdiffbtw_number', 'RecurringAdjustmentDetailId', 'pyd_parent_pyd_number', 'pyd_orig_currency', 'pyd_orig_amount', 'pyd_cex_rate', 'pyd_rate_factor', 'pyd_fixedRate', 'pyd_fixedQty', 'pyd_fixedAmount', 'pyd_ico_ivd_number_child', 'std_purchase_date', 'std_purchase_tax_state', 'pyd_tax_originator_pyd_number', 'pyd_clock_start', 'pyd_clock_end', 'pyd_lghtype1', 'pyd_RemitToVendorID', 'pyd_pair', 'termCode', 'pyd_reconcile', 'PayScheduleId', 'ExcludeGuaranteePay', 'INS_TIMESTAMP', 'DW_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
