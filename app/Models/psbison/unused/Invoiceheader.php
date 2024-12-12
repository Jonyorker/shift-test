<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ivh_invoicenumber
 * @property string $ivh_billto
 * @property string $ivh_terms
 * @property int $ivh_totalcharge
 * @property string $ivh_shipper
 * @property string $ivh_consignee
 * @property string $ivh_originpoint
 * @property string $ivh_destpoint
 * @property string $ivh_invoicestatus
 * @property int $ivh_origincity
 * @property int $ivh_destcity
 * @property string $ivh_originstate
 * @property string $ivh_deststate
 * @property string $ivh_originregion1
 * @property string $ivh_destregion1
 * @property string $ivh_supplier
 * @property string $ivh_shipdate
 * @property string $ivh_deliverydate
 * @property string $ivh_revtype1
 * @property string $ivh_revtype2
 * @property string $ivh_revtype3
 * @property string $ivh_revtype4
 * @property float $ivh_totalweight
 * @property float $ivh_totalpieces
 * @property float $ivh_totalmiles
 * @property string $ivh_currency
 * @property string $ivh_currencydate
 * @property float $ivh_totalvolume
 * @property int $ivh_taxamount1
 * @property int $ivh_taxamount2
 * @property int $ivh_taxamount3
 * @property int $ivh_taxamount4
 * @property string $ivh_transtype
 * @property string $ivh_creditmemo
 * @property string $ivh_applyto
 * @property int $shp_hdrnumber
 * @property string $ivh_printdate
 * @property string $ivh_billdate
 * @property string $ivh_lastprintdate
 * @property int $ivh_hdrnumber
 * @property int $ord_hdrnumber
 * @property string $ivh_originregion2
 * @property string $ivh_originregion3
 * @property string $ivh_originregion4
 * @property string $ivh_destregion2
 * @property string $ivh_destregion3
 * @property string $ivh_destregion4
 * @property int $mfh_hdrnumber
 * @property string $ivh_remark
 * @property string $ivh_driver
 * @property string $ivh_tractor
 * @property string $ivh_trailer
 * @property string $ivh_user_id1
 * @property string $ivh_user_id2
 * @property string $ivh_ref_number
 * @property string $ivh_driver2
 * @property int $mov_number
 * @property mixed $timestamp
 * @property string $ivh_edi_flag
 * @property float $ivh_freight_miles
 * @property string $ivh_priority
 * @property int $ivh_low_temp
 * @property int $ivh_high_temp
 * @property string $ivh_xferdate
 * @property string $ivh_order_by
 * @property string $tar_tarriffnumber
 * @property int $tar_number
 * @property int $ivh_bookyear
 * @property int $ivh_bookmonth
 * @property string $tar_tariffitem
 * @property int $ivh_maxlength
 * @property int $ivh_maxwidth
 * @property int $ivh_maxheight
 * @property string $ivh_mbstatus
 * @property int $ivh_mbnumber
 * @property string $ord_number
 * @property float $ivh_quantity
 * @property int $ivh_rate
 * @property int $ivh_charge
 * @property string $cht_itemcode
 * @property string $ivh_splitbill_flag
 * @property string $ivh_company
 * @property string $ivh_carrier
 * @property int $ivh_archarge
 * @property string $ivh_arcurrency
 * @property float $ivh_loadtime
 * @property float $ivh_unloadtime
 * @property float $ivh_drivetime
 * @property float $ivh_totaltime
 * @property string $ivh_rateby
 * @property string $ivh_revenue_date
 * @property string $ivh_batch_id
 * @property int $ivh_stopoffs
 * @property int $Ivh_quantity_type
 * @property int $ivh_charge_type
 * @property string $ivh_originzipcode
 * @property string $ivh_destzipcode
 * @property float $ivh_ratingquantity
 * @property string $ivh_ratingunit
 * @property string $ivh_unit
 * @property float $ivh_totalfsc
 * @property float $ivh_mileage_adjustment
 * @property string $ivh_definition
 * @property string $ivh_hideshipperaddr
 * @property string $ivh_hideconsignaddr
 * @property string $ivh_paperworkstatus
 * @property string $ivh_showshipper
 * @property string $ivh_showcons
 * @property int $ivh_allinclusivecharge
 * @property string $ivh_order_cmd_code
 * @property string $ivh_applyto_definition
 * @property string $ivh_reftype
 * @property string $ivh_attention
 * @property int $ivh_rate_type
 * @property string $ivh_paperwork_override
 * @property int $ivh_cmrbill_link
 * @property string $ivh_mbperiod
 * @property string $ivh_mbperiodstart
 * @property int $ivh_imagestatus
 * @property string $ivh_imagestatus_date
 * @property int $ivh_imagecount
 * @property int $ivh_mbimagestatus
 * @property string $ivh_mbimagestatus_date
 * @property int $ivh_mbimagecount
 * @property string $last_updateby
 * @property string $last_updatedate
 * @property float $ivh_mileage_adj_pct
 * @property int $inv_revenue_pay_fix
 * @property int $inv_revenue_pay
 * @property string $ivh_billto_parent
 * @property string $ivh_block_printing
 * @property int $ivh_custdoc
 * @property string $ivh_entryport
 * @property string $ivh_exitport
 * @property int $ivh_paid_amount
 * @property string $ivh_pay_status
 * @property float $ivh_dimfactor
 * @property string $ivh_TrlConfiguration
 * @property string $ivh_order_source
 * @property float $ivh_fuelprice
 * @property string $ivh_gp_gl_postdate
 * @property int $ivh_charge_type_lh
 * @property string $ivh_booked_revtype1
 * @property string $ivh_misc_number
 * @property string $ivh_paid_indicator
 * @property string $ivh_lastchecknumber
 * @property int $ivh_lastcheckamount
 * @property int $ivh_totalpaid
 * @property string $ivh_lastcheckdate
 * @property float $ivh_exchangerate
 * @property float $ivh_loaded_distance
 * @property float $ivh_empty_distance
 * @property string $ivh_BelongsTo
 * @property int $ivh_leaseid
 * @property string $ivh_leaseperiodenddate
 * @property string $ivh_nomincharges
 * @property int $car_key
 * @property string $ivh_furthestpointconsignee
 * @property string $ivh_invoiceby
 * @property int $ivh_mbnumber_custom
 * @property string $ivh_trailer2
 * @property string $ivh_GPDatabase
 * @property string $ivh_GPserver
 * @property string $ivh_GPTerritory
 * @property string $ivh_GPSalesPerson
 * @property string $ivh_GPPONumber
 * @property string $ivh_GPDocDescription
 * @property string $ivh_GPCustNumber
 * @property string $ivh_GPDocnumber
 * @property string $ivh_GPbachnumbeer
 * @property string $ivh_GPbilldate
 * @property string $ivh_GPDuedate
 * @property string $ivh_GPpostdate
 * @property int $ivh_docnumber
 * @property int $rowsec_rsrv_id
 * @property int $dbh_id
 * @property string $ivh_billing_usedate
 * @property string $ivh_billing_usedate_setting
 * @property int $ivh_dedicated_invnumber
 * @property string $posted_ind
 * @property string $ivh_splitgroup
 * @property string $mbgroupdata
 * @property string $ivh_reprint
 * @property string $ivh_mb_customgroupby
 * @property string $ivh_dballocate_flag
 * @property string $ivh_donotprint
 * @property string $ivh_subcompany
 * @property string $ivh_dedicated_includedate
 * @property int $ivh_lh_charge_with_rollin
 * @property int $ivh_rollin_lh_rate
 * @property int $ivh_lh_charge
 * @property float $ivh_totalpallets
 * @property string $ivh_totalpalletunits
 * @property string $ivh_totalweightunits
 * @property string $ivh_totalvolumeunits
 * @property string $ivh_totalpiecesunits
 * @property string $ivh_totalmilesunits
 * @property string $INS_TIMESTAMP
 */
class Invoiceheader extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Invoiceheader';

    protected $fillable = ['ivh_invoicenumber', 'ivh_billto', 'ivh_terms', 'ivh_totalcharge', 'ivh_shipper', 'ivh_consignee', 'ivh_originpoint', 'ivh_destpoint', 'ivh_invoicestatus', 'ivh_origincity', 'ivh_destcity', 'ivh_originstate', 'ivh_deststate', 'ivh_originregion1', 'ivh_destregion1', 'ivh_supplier', 'ivh_shipdate', 'ivh_deliverydate', 'ivh_revtype1', 'ivh_revtype2', 'ivh_revtype3', 'ivh_revtype4', 'ivh_totalweight', 'ivh_totalpieces', 'ivh_totalmiles', 'ivh_currency', 'ivh_currencydate', 'ivh_totalvolume', 'ivh_taxamount1', 'ivh_taxamount2', 'ivh_taxamount3', 'ivh_taxamount4', 'ivh_transtype', 'ivh_creditmemo', 'ivh_applyto', 'shp_hdrnumber', 'ivh_printdate', 'ivh_billdate', 'ivh_lastprintdate', 'ivh_hdrnumber', 'ord_hdrnumber', 'ivh_originregion2', 'ivh_originregion3', 'ivh_originregion4', 'ivh_destregion2', 'ivh_destregion3', 'ivh_destregion4', 'mfh_hdrnumber', 'ivh_remark', 'ivh_driver', 'ivh_tractor', 'ivh_trailer', 'ivh_user_id1', 'ivh_user_id2', 'ivh_ref_number', 'ivh_driver2', 'mov_number', 'timestamp', 'ivh_edi_flag', 'ivh_freight_miles', 'ivh_priority', 'ivh_low_temp', 'ivh_high_temp', 'ivh_xferdate', 'ivh_order_by', 'tar_tarriffnumber', 'tar_number', 'ivh_bookyear', 'ivh_bookmonth', 'tar_tariffitem', 'ivh_maxlength', 'ivh_maxwidth', 'ivh_maxheight', 'ivh_mbstatus', 'ivh_mbnumber', 'ord_number', 'ivh_quantity', 'ivh_rate', 'ivh_charge', 'cht_itemcode', 'ivh_splitbill_flag', 'ivh_company', 'ivh_carrier', 'ivh_archarge', 'ivh_arcurrency', 'ivh_loadtime', 'ivh_unloadtime', 'ivh_drivetime', 'ivh_totaltime', 'ivh_rateby', 'ivh_revenue_date', 'ivh_batch_id', 'ivh_stopoffs', 'Ivh_quantity_type', 'ivh_charge_type', 'ivh_originzipcode', 'ivh_destzipcode', 'ivh_ratingquantity', 'ivh_ratingunit', 'ivh_unit', 'ivh_totalfsc', 'ivh_mileage_adjustment', 'ivh_definition', 'ivh_hideshipperaddr', 'ivh_hideconsignaddr', 'ivh_paperworkstatus', 'ivh_showshipper', 'ivh_showcons', 'ivh_allinclusivecharge', 'ivh_order_cmd_code', 'ivh_applyto_definition', 'ivh_reftype', 'ivh_attention', 'ivh_rate_type', 'ivh_paperwork_override', 'ivh_cmrbill_link', 'ivh_mbperiod', 'ivh_mbperiodstart', 'ivh_imagestatus', 'ivh_imagestatus_date', 'ivh_imagecount', 'ivh_mbimagestatus', 'ivh_mbimagestatus_date', 'ivh_mbimagecount', 'last_updateby', 'last_updatedate', 'ivh_mileage_adj_pct', 'inv_revenue_pay_fix', 'inv_revenue_pay', 'ivh_billto_parent', 'ivh_block_printing', 'ivh_custdoc', 'ivh_entryport', 'ivh_exitport', 'ivh_paid_amount', 'ivh_pay_status', 'ivh_dimfactor', 'ivh_TrlConfiguration', 'ivh_order_source', 'ivh_fuelprice', 'ivh_gp_gl_postdate', 'ivh_charge_type_lh', 'ivh_booked_revtype1', 'ivh_misc_number', 'ivh_paid_indicator', 'ivh_lastchecknumber', 'ivh_lastcheckamount', 'ivh_totalpaid', 'ivh_lastcheckdate', 'ivh_exchangerate', 'ivh_loaded_distance', 'ivh_empty_distance', 'ivh_BelongsTo', 'ivh_leaseid', 'ivh_leaseperiodenddate', 'ivh_nomincharges', 'car_key', 'ivh_furthestpointconsignee', 'ivh_invoiceby', 'ivh_mbnumber_custom', 'ivh_trailer2', 'ivh_GPDatabase', 'ivh_GPserver', 'ivh_GPTerritory', 'ivh_GPSalesPerson', 'ivh_GPPONumber', 'ivh_GPDocDescription', 'ivh_GPCustNumber', 'ivh_GPDocnumber', 'ivh_GPbachnumbeer', 'ivh_GPbilldate', 'ivh_GPDuedate', 'ivh_GPpostdate', 'ivh_docnumber', 'rowsec_rsrv_id', 'dbh_id', 'ivh_billing_usedate', 'ivh_billing_usedate_setting', 'ivh_dedicated_invnumber', 'posted_ind', 'ivh_splitgroup', 'mbgroupdata', 'ivh_reprint', 'ivh_mb_customgroupby', 'ivh_dballocate_flag', 'ivh_donotprint', 'ivh_subcompany', 'ivh_dedicated_includedate', 'ivh_lh_charge_with_rollin', 'ivh_rollin_lh_rate', 'ivh_lh_charge', 'ivh_totalpallets', 'ivh_totalpalletunits', 'ivh_totalweightunits', 'ivh_totalvolumeunits', 'ivh_totalpiecesunits', 'ivh_totalmilesunits', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
