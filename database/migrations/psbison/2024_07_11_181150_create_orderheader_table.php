<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('orderheader', function (Blueprint $table) {
            $table->string('ord_company', 8);
            $table->string('ord_number', 12);
            $table->string('ord_customer', 8)->nullable();
            $table->dateTime('ord_bookdate')->nullable();
            $table->string('ord_bookedby', 20)->nullable();
            $table->string('ord_status', 6)->nullable();
            $table->string('ord_originpoint', 8)->nullable();
            $table->string('ord_destpoint', 8)->nullable();
            $table->string('ord_invoicestatus', 6)->nullable();
            $table->integer('ord_origincity')->nullable();
            $table->integer('ord_destcity')->nullable();
            $table->string('ord_originstate', 6)->nullable();
            $table->string('ord_deststate', 6)->nullable();
            $table->string('ord_originregion1', 6)->nullable();
            $table->string('ord_destregion1', 6)->nullable();
            $table->string('ord_supplier', 8)->nullable();
            $table->string('ord_billto', 8)->nullable();
            $table->dateTime('ord_startdate')->nullable();
            $table->dateTime('ord_completiondate')->nullable();
            $table->string('ord_revtype1', 6)->nullable();
            $table->string('ord_revtype2', 6)->nullable();
            $table->string('ord_revtype3', 6)->nullable();
            $table->string('ord_revtype4', 6)->nullable();
            $table->float('ord_totalweight', 53, 0)->nullable();
            $table->decimal('ord_totalpieces', 10)->nullable();
            $table->integer('ord_totalmiles')->nullable();
            $table->float('ord_totalcharge', 53, 0)->nullable();
            $table->string('ord_currency', 6)->nullable();
            $table->dateTime('ord_currencydate')->nullable();
            $table->float('ord_totalvolume', 53, 0)->nullable();
            $table->integer('ord_hdrnumber')->nullable();
            $table->string('ord_refnum', 30)->nullable();
            $table->string('ord_invoicewhole', 1)->nullable();
            $table->string('ord_remark', 254)->nullable();
            $table->string('ord_shipper', 8)->nullable();
            $table->string('ord_consignee', 8)->nullable();
            $table->string('ord_pu_at', 6)->nullable();
            $table->string('ord_dr_at', 6)->nullable();
            $table->string('ord_originregion2', 6)->nullable();
            $table->string('ord_originregion3', 6)->nullable();
            $table->string('ord_originregion4', 6)->nullable();
            $table->string('ord_destregion2', 6)->nullable();
            $table->string('ord_destregion3', 6)->nullable();
            $table->string('ord_destregion4', 6)->nullable();
            $table->integer('mfh_hdrnumber')->nullable();
            $table->string('ord_priority', 6)->nullable();
            $table->integer('mov_number')->nullable();
            $table->string('tar_tarriffnumber', 12)->nullable();
            $table->integer('tar_number')->nullable();
            $table->string('timestamp')->nullable();
            $table->string('tar_tariffitem', 12)->nullable();
            $table->string('ord_contact', 30)->nullable();
            $table->string('ord_showshipper', 8)->nullable();
            $table->string('ord_showcons', 8)->nullable();
            $table->string('ord_subcompany', 8)->nullable();
            $table->tinyInteger('ord_lowtemp')->nullable();
            $table->tinyInteger('ord_hitemp')->nullable();
            $table->float('ord_quantity', 53, 0)->nullable();
            $table->decimal('ord_rate', 19, 4)->nullable();
            $table->decimal('ord_charge', 19, 4)->nullable();
            $table->string('ord_rateunit', 6)->nullable();
            $table->string('ord_unit', 6)->nullable();
            $table->string('trl_type1', 6)->nullable();
            $table->string('ord_driver1', 8)->nullable();
            $table->string('ord_driver2', 8)->nullable();
            $table->string('ord_tractor', 8)->nullable();
            $table->string('ord_trailer', 13)->nullable();
            $table->decimal('ord_length', 19, 4)->nullable();
            $table->decimal('ord_width', 19, 4)->nullable();
            $table->decimal('ord_height', 19, 4)->nullable();
            $table->string('ord_lengthunit', 6)->nullable();
            $table->string('ord_widthunit', 6)->nullable();
            $table->string('ord_heightunit', 6)->nullable();
            $table->string('ord_reftype', 6)->nullable();
            $table->string('cmd_code', 8)->nullable();
            $table->string('ord_description', 60)->nullable();
            $table->string('ord_terms', 6)->nullable();
            $table->string('cht_itemcode', 6)->nullable();
            $table->dateTime('ord_origin_earliestdate')->nullable();
            $table->dateTime('ord_origin_latestdate')->nullable();
            $table->integer('ord_odmetermiles')->nullable();
            $table->tinyInteger('ord_stopcount')->nullable();
            $table->dateTime('ord_dest_earliestdate')->nullable();
            $table->dateTime('ord_dest_latestdate')->nullable();
            $table->string('ref_sid', 1)->nullable();
            $table->string('ref_pickup', 1)->nullable();
            $table->decimal('ord_cmdvalue', 19, 4)->nullable();
            $table->decimal('ord_accessorial_chrg', 19, 4)->nullable();
            $table->dateTime('ord_availabledate')->nullable();
            $table->decimal('ord_miscqty', 12, 4)->nullable();
            $table->string('ord_tempunits', 6)->nullable();
            $table->dateTime('ord_datetaken')->nullable();
            $table->string('ord_totalweightunits', 6)->nullable();
            $table->string('ord_totalvolumeunits', 6)->nullable();
            $table->string('ord_totalcountunits', 6)->nullable();
            $table->float('ord_loadtime', 53, 0)->nullable();
            $table->float('ord_unloadtime', 53, 0)->nullable();
            $table->float('ord_drivetime', 53, 0)->nullable();
            $table->string('ord_rateby', 1)->nullable();
            $table->integer('ord_quantity_type')->nullable();
            $table->string('ord_thirdpartytype1', 8)->nullable();
            $table->string('ord_thirdpartytype2', 8)->nullable();
            $table->integer('ord_notified')->nullable();
            $table->integer('ord_ldmiles')->nullable();
            $table->integer('ord_mtmiles')->nullable();
            $table->integer('ord_invalidmiles')->nullable();
            $table->smallInteger('ord_charge_type')->nullable();
            $table->string('ord_bol_printed', 1)->nullable();
            $table->string('ord_fromorder', 12)->nullable();
            $table->smallInteger('ord_mintemp')->nullable();
            $table->smallInteger('ord_maxtemp')->nullable();
            $table->string('ord_distributor', 8)->nullable();
            $table->integer('ord_carriermiles')->nullable();
            $table->string('opt_trc_type4', 6)->nullable();
            $table->string('opt_trl_type4', 6)->nullable();
            $table->decimal('ord_cod_amount', 19, 4)->nullable();
            $table->string('appt_init', 3)->nullable();
            $table->string('appt_contact', 35)->nullable();
            $table->float('ord_ratingquantity', 53, 0)->nullable();
            $table->string('ord_ratingunit', 6)->nullable();
            $table->string('bis_insertedby', 20)->nullable();
            $table->decimal('bis_lumperamt', 19, 4)->nullable();
            $table->dateTime('bis_lumperdate')->nullable();
            $table->string('ord_hideshipperaddr', 1)->nullable();
            $table->string('ord_hideconsignaddr', 1)->nullable();
            $table->string('ord_booked_revtype1', 12);
            $table->string('ord_mileagetable', 4)->nullable();
            $table->integer('ord_tareweight')->nullable();
            $table->integer('ord_grossweight')->nullable();
            $table->string('ord_trl_type2', 6)->nullable();
            $table->string('ord_trl_type3', 6)->nullable();
            $table->string('ord_trl_type4', 6)->nullable();
            $table->decimal('ord_allinclusivecharge', 19, 4)->nullable();
            $table->string('ord_extrainfo1', 30)->nullable();
            $table->string('ord_extrainfo2', 30)->nullable();
            $table->string('ord_extrainfo3', 30)->nullable();
            $table->string('ord_extrainfo4', 30)->nullable();
            $table->string('ord_extrainfo5', 30)->nullable();
            $table->string('ord_extrainfo6', 30)->nullable();
            $table->string('ord_extrainfo7', 30)->nullable();
            $table->string('ord_extrainfo8', 30)->nullable();
            $table->string('ord_extrainfo9', 30)->nullable();
            $table->string('ord_extrainfo10', 30)->nullable();
            $table->string('ord_extrainfo11', 30)->nullable();
            $table->string('ord_extrainfo12', 30)->nullable();
            $table->string('ord_extrainfo13', 30)->nullable();
            $table->string('ord_extrainfo14', 30)->nullable();
            $table->string('ord_extrainfo15', 30)->nullable();
            $table->smallInteger('ord_rate_type')->nullable();
            $table->string('ord_barcode', 30)->nullable();
            $table->string('ord_broker', 12)->nullable();
            $table->float('ord_stlquantity', 53, 0)->nullable();
            $table->string('ord_stlunit', 6)->nullable();
            $table->tinyInteger('ord_stlquantity_type')->nullable();
            $table->integer('ord_fromschedule')->nullable();
            $table->integer('ord_schedulebatch')->nullable();
            $table->string('bis_trailer', 12)->nullable();
            $table->string('last_updateby', 256)->nullable();
            $table->dateTime('last_updatedate')->nullable();
            $table->decimal('ord_mileage_adj_pct', 9)->nullable();
            $table->string('ord_intermodal', 1)->nullable();
            $table->integer('Ord_UnlockKey')->nullable();
            $table->string('ord_trlrentinv', 1)->nullable();
            $table->integer('ord_revenue_pay_fix')->nullable();
            $table->decimal('ord_revenue_pay', 19, 4)->nullable();
            $table->string('ord_reserved_number', 1)->nullable();
            $table->integer('ord_customs_document')->nullable();
            $table->smallInteger('ord_charge_type_lh')->nullable();
            $table->tinyInteger('ord_noautosplit');
            $table->tinyInteger('ord_noautotransfer');
            $table->dateTime('ord_complete_stamp')->nullable();
            $table->decimal('ord_totalloadingmeters', 12, 4)->nullable();
            $table->string('ord_totalloadingmetersunit', 6)->nullable();
            $table->string('ord_entryport', 8);
            $table->string('ord_exitport', 8);
            $table->float('ord_commodities_weight', 53, 0)->nullable();
            $table->string('ord_order_source', 6)->nullable();
            $table->integer('external_id')->nullable();
            $table->string('external_type', 6)->nullable();
            $table->decimal('ord_dimfactor', 12, 4)->nullable();
            $table->string('ord_TrlConfiguration', 6)->nullable();
            $table->string('ord_origin_zip', 10)->nullable();
            $table->string('ord_dest_zip', 10)->nullable();
            $table->decimal('ord_toll_cost', 19, 4)->nullable();
            $table->dateTime('ord_toll_cost_update_date')->nullable();
            $table->string('ord_raildest', 25)->nullable();
            $table->string('ord_railpoolid', 8)->nullable();
            $table->string('ord_trailer2', 13)->nullable();
            $table->string('ord_rate_mileagetable', 4)->nullable();
            $table->integer('ord_odmetermiles_mtid')->nullable();
            $table->string('ord_route', 15)->nullable();
            $table->dateTime('ord_route_effc_date')->nullable();
            $table->dateTime('ord_route_exp_date')->nullable();
            $table->string('ord_edipurpose', 1)->nullable();
            $table->string('ord_ediuseraction', 1)->nullable();
            $table->tinyInteger('ord_edistate')->nullable();
            $table->string('ord_no_recalc_miles', 1)->nullable();
            $table->string('ord_editradingpartner', 20)->nullable();
            $table->string('ord_edideclinereason', 30)->nullable();
            $table->string('ord_carrier', 8)->nullable();
            $table->dateTime('ord_miscdate1')->nullable();
            $table->string('ord_pyd_status_1', 3);
            $table->string('ord_pyd_status_2', 3);
            $table->string('ord_pin', 50)->nullable();
            $table->string('ord_accounttype', 6)->nullable();
            $table->string('ord_shortcomment', 6)->nullable();
            $table->dateTime('ord_lastratedate')->nullable();
            $table->integer('ord_manualeventcallminutes')->nullable();
            $table->integer('ord_manualcheckcallminutes')->nullable();
            $table->string('ord_batchrateeligibility', 1)->nullable();
            $table->string('ord_batchratestatus', 1)->nullable();
            $table->integer('ord_odometer_start')->nullable();
            $table->integer('ord_odometer_end')->nullable();
            $table->decimal('ord_billmiles', 19, 4)->nullable();
            $table->decimal('ord_paymiles', 19, 4)->nullable();
            $table->decimal('ord_standardhours', 19, 4)->nullable();
            $table->string('ord_preventexternalupdate', 1)->nullable();
            $table->integer('ord_job_ordered')->nullable();
            $table->integer('ord_job_remaining')->nullable();
            $table->string('sv_manu_export_flag', 1)->nullable();
            $table->string('ord_cbp', 1)->nullable();
            $table->string('ord_cyclic_dsp_enabled', 1)->nullable();
            $table->string('ord_preassign_ack_required', 1)->nullable();
            $table->string('ord_anc_number', 12)->nullable();
            $table->string('ord_gvw_unit', 6)->nullable();
            $table->decimal('ord_gvw_amt', 19, 4)->nullable();
            $table->string('ord_gvw_adjstd_unit', 6)->nullable();
            $table->decimal('ord_gvw_adjstd_amt', 19, 4)->nullable();
            $table->string('ord_BelongsTo', 6)->nullable();
            $table->string('ord_chassis', 13)->nullable();
            $table->string('ord_chassis2', 13)->nullable();
            $table->integer('ord_showasconsignee_dist')->nullable();
            $table->string('ord_use_showasconsignee_dist', 1)->nullable();
            $table->string('ord_nomincharges', 1)->nullable();
            $table->integer('car_key')->nullable();
            $table->string('GST_REQ', 1)->nullable();
            $table->string('QST_REQ', 1)->nullable();
            $table->string('ord_thirdpartytype3', 8)->nullable();
            $table->float('ord_thirdparty_split_percent', 53, 0);
            $table->string('ord_thirdparty_split', 1)->nullable();
            $table->string('ord_carrierchangecode', 6)->nullable();
            $table->string('ord_extequip_automatch', 1)->nullable();
            $table->string('IVA_REQ', 1)->nullable();
            $table->decimal('ord_broker_percent', 8, 4)->nullable();
            $table->decimal('ord_target_margin', 12, 4)->nullable();
            $table->string('ord_paystatus_override', 6)->nullable();
            $table->dateTime('ord_customdate')->nullable();
            $table->tinyInteger('ord_edistate_prior')->nullable();
            $table->string('ord_railramporig', 8)->nullable();
            $table->string('ord_railrampdest', 8)->nullable();
            $table->integer('rowsec_rsrv_id')->nullable();
            $table->string('ord_reviewneeded', 1)->nullable();
            $table->string('ord_DelRptSent', 1)->nullable();
            $table->string('recurring_job_flag', 1)->nullable();
            $table->string('ord_reviewed', 1)->nullable();
            $table->string('ord_reviewedby', 20)->nullable();
            $table->dateTime('ord_revieweddate')->nullable();
            $table->integer('ord_tpmiles')->nullable();
            $table->integer('ord_intermodalmiles')->nullable();
            $table->string('ord_remark2')->nullable();
            $table->string('ord_timezone', 10)->nullable();
            $table->string('ord_routename', 512)->nullable();
            $table->dateTime('ord_datepromised')->nullable();
            $table->dateTime('ord_billing_usedate')->nullable();
            $table->string('ord_billing_usedate_setting', 6)->nullable();
            $table->string('ord_pallet_type', 6)->nullable();
            $table->integer('ord_pallet_count')->nullable();
            $table->dateTime('payrollcloseddate')->nullable();
            $table->dateTime('billingcloseddate')->nullable();
            $table->string('ord_override_stop_type', 6)->nullable();
            $table->dateTime('ord_invoice_effectivedate')->nullable();
            $table->string('ord_checklisttype', 6)->nullable();
            $table->string('ord_mastermatchpending', 1)->nullable();
            $table->string('ord_railschedulecascadepending', 1)->nullable();
            $table->string('ord_importexport', 1)->nullable();
            $table->string('ord_pendinglegstatusupdate', 1)->nullable();
            $table->string('ord_submode', 6)->nullable();
            $table->boolean('ord_job_freightbased')->nullable();
            $table->string('ord_approved', 2)->nullable();
            $table->string('HST_REQ', 1)->nullable();
            $table->string('ord_ratemode', 6)->nullable();
            $table->string('ord_servicelevel', 6)->nullable();
            $table->integer('ord_servicedays')->nullable();
            $table->string('ord_over_credit_limit_approved', 1)->nullable();
            $table->string('ord_over_credit_limit_approved_by', 256)->nullable();
            $table->dateTime('ord_triprpt_last_rundate')->nullable();
            $table->string('ord_app_eqcodes', 256)->nullable();
            $table->string('ord_totalmileunits', 6)->nullable();
            $table->float('ord_totalpallets', 53, 0)->nullable();
            $table->string('ord_totalpalletunits', 6)->nullable();
            $table->decimal('ord_totalcount2', 10)->nullable();
            $table->string('ord_totalcount2units', 6)->nullable();
            $table->float('ord_rate_per', 53, 0)->nullable();
            $table->decimal('ord_sub_charge', 10)->nullable();
            $table->decimal('ord_discount_rate', 10)->nullable();
            $table->decimal('ord_discount', 10)->nullable();
            $table->decimal('ord_discount_qty', 10)->nullable();
            $table->decimal('ord_discount_per', 10)->nullable();
            $table->integer('ord_disc_tar_number')->nullable();
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('orderheader');
    }
};
