<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $lgh_number
 * @property int $lgh_firstlegnumber
 * @property int $lgh_lastlegnumber
 * @property int $lgh_drvtripnumber
 * @property float $lgh_cost
 * @property float $lgh_revenue
 * @property int $lgh_odometerstart
 * @property int $lgh_odometerend
 * @property int $lgh_milesshortest
 * @property int $lgh_milespractical
 * @property float $lgh_allocfactor
 * @property string $lgh_startdate
 * @property string $lgh_enddate
 * @property int $lgh_startcity
 * @property int $lgh_endcity
 * @property string $lgh_startregion1
 * @property string $lgh_endregion1
 * @property string $lgh_startstate
 * @property string $lgh_endstate
 * @property string $lgh_outstatus
 * @property int $lgh_startlat
 * @property int $lgh_startlong
 * @property int $lgh_endlat
 * @property int $lgh_endlong
 * @property string $lgh_class1
 * @property string $lgh_class2
 * @property string $lgh_class3
 * @property string $lgh_class4
 * @property int $stp_number_start
 * @property int $stp_number_end
 * @property string $cmp_id_start
 * @property string $cmp_id_end
 * @property string $lgh_startregion2
 * @property string $lgh_startregion3
 * @property string $lgh_startregion4
 * @property string $lgh_endregion2
 * @property string $lgh_endregion3
 * @property string $lgh_endregion4
 * @property string $lgh_instatus
 * @property string $lgh_driver1
 * @property string $lgh_driver2
 * @property string $lgh_tractor
 * @property string $lgh_primary_trailer
 * @property int $mov_number
 * @property int $fgt_number
 * @property string $lgh_priority
 * @property string $lgh_schdtearliest
 * @property string $lgh_schdtlatest
 * @property string $cmd_code
 * @property string $fgt_description
 * @property string $mpp_teamleader
 * @property string $mpp_fleet
 * @property string $mpp_division
 * @property string $mpp_domicile
 * @property string $mpp_company
 * @property string $mpp_terminal
 * @property string $mpp_type1
 * @property string $mpp_type2
 * @property string $mpp_type3
 * @property string $mpp_type4
 * @property string $trc_company
 * @property string $trc_division
 * @property string $trc_fleet
 * @property string $trc_terminal
 * @property string $trc_type1
 * @property string $trc_type2
 * @property string $trc_type3
 * @property string $trc_type4
 * @property int $mfh_number
 * @property string $trl_company
 * @property string $trl_fleet
 * @property string $trl_division
 * @property string $trl_terminal
 * @property string $trl_type1
 * @property string $trl_type2
 * @property string $trl_type3
 * @property string $trl_type4
 * @property int $ord_hdrnumber
 * @property mixed $timestamp
 * @property string $lgh_fueltaxstatus
 * @property int $lgh_mtmiles
 * @property string $lgh_prjdate1
 * @property string $lgh_etaalert1
 * @property int $lgh_etamins1
 * @property string $lgh_outofroute_routing
 * @property string $lgh_type1
 * @property int $lgh_alloc_revenue
 * @property string $lgh_primary_pup
 * @property float $lgh_prod_hr
 * @property float $lgh_tot_hr
 * @property float $lgh_ld_unld_time
 * @property float $lgh_load_time
 * @property string $lgh_startcty_nmstct
 * @property string $lgh_endcty_nmstct
 * @property string $lgh_carrier
 * @property string $lgh_enddate_arrival
 * @property string $lgh_dsp_date
 * @property string $lgh_geo_date
 * @property string $lgh_nexttrailer1
 * @property string $lgh_nexttrailer2
 * @property int $lgh_etamilestofinal
 * @property int $lgh_etamintofinal
 * @property string $lgh_split_flag
 * @property string $lgh_createdby
 * @property string $lgh_createdon
 * @property string $lgh_createapp
 * @property string $lgh_updatedby
 * @property string $lgh_updatedon
 * @property string $lgh_updateapp
 * @property string $lgh_rstartdate
 * @property string $lgh_renddate
 * @property int $lgh_rstartcity
 * @property int $lgh_rendcity
 * @property string $lgh_rstartregion1
 * @property string $lgh_rendregion1
 * @property string $lgh_rstartstate
 * @property string $lgh_rendstate
 * @property int $lgh_rstartlat
 * @property int $lgh_rstartlong
 * @property int $lgh_rendlat
 * @property int $lgh_rendlong
 * @property int $stp_number_rstart
 * @property int $stp_number_rend
 * @property string $cmp_id_rstart
 * @property string $cmp_id_rend
 * @property string $lgh_rstartregion2
 * @property string $lgh_rstartregion3
 * @property string $lgh_rstartregion4
 * @property string $lgh_rendregion2
 * @property string $lgh_rendregion3
 * @property string $lgh_rendregion4
 * @property string $lgh_rstartcty_nmstct
 * @property string $lgh_rendcty_nmstct
 * @property int $lgh_feetavailable
 * @property string $can_cap_expires
 * @property string $can_ld_expires
 * @property string $lgh_dispatchdate
 * @property string $lgh_asset_lock
 * @property string $lgh_asset_lock_dtm
 * @property string $lgh_asset_lock_user
 * @property string $lgh_load_origin
 * @property float $lgh_est_lhrate
 * @property float $lgh_est_lhpay
 * @property float $lgh_est_dhrate
 * @property float $lgh_est_dhpay
 * @property float $lgh_est_accessorials
 * @property int $drvplan_number
 * @property int $next_drp_stp_number
 * @property int $next_pup_stp_number
 * @property int $ord_totalweight
 * @property int $ord_totalvolume
 * @property int $tot_count
 * @property int $cmd_count
 * @property int $ordercount
 * @property int $xdock
 * @property int $ord_stopcount
 * @property string $washstatus
 * @property string $ref_type
 * @property string $ref_number
 * @property string $npup_cmpid
 * @property string $npup_cmpname
 * @property string $npup_ctyname
 * @property string $npup_state
 * @property string $npup_arrivaldate
 * @property string $ndrp_cmpid
 * @property string $ndrp_cmpname
 * @property string $ndrp_ctyname
 * @property string $ndrp_state
 * @property string $ndrp_arrivaldate
 * @property string $npup_departuredate
 * @property string $ndrp_departuredate
 * @property string $lgh_type2
 * @property string $lgh_extrainfo1
 * @property string $lgh_extrainfo2
 * @property string $lgh_extrainfo3
 * @property string $lgh_extrainfo4
 * @property string $lgh_extrainfo5
 * @property string $lgh_extrainfo6
 * @property string $lgh_extrainfo7
 * @property string $lgh_extrainfo8
 * @property string $lgh_extrainfo9
 * @property string $lgh_extrainfo10
 * @property string $lgh_extrainfo11
 * @property string $lgh_extrainfo12
 * @property string $lgh_extrainfo13
 * @property string $lgh_extrainfo14
 * @property string $lgh_extrainfo15
 * @property string $lgh_tm_status
 * @property int $lgh_tour_number
 * @property string $o_cmpname
 * @property string $o_state
 * @property string $d_cmpname
 * @property string $d_state
 * @property string $f_cmpid
 * @property string $f_cmpname
 * @property string $f_ctyname
 * @property string $f_state
 * @property string $l_cmpid
 * @property string $l_cmpname
 * @property string $l_ctyname
 * @property string $l_state
 * @property string $evt_driver1_name
 * @property string $evt_driver2_name
 * @property string $lgh_outstatus_name
 * @property string $lgh_instatus_name
 * @property string $lgh_priority_name
 * @property string $trl_type1_name
 * @property string $lgh_class1_name
 * @property string $lgh_class2_name
 * @property string $lgh_class3_name
 * @property string $lgh_class4_name
 * @property string $opt_trc_type4_label
 * @property string $opt_trl_type4_label
 * @property string $c_lgh_type1
 * @property string $c_lgh_type2
 * @property string $mpp_fleet_name
 * @property string $ord_ord_subcompany
 * @property string $ord_bookedby
 * @property string $ord_trl_type1
 * @property int $ord_totalmiles
 * @property string $o_cmp_geoloc
 * @property string $d_cmp_geoloc
 * @property string $d_address1
 * @property string $d_address2
 * @property string $bison_latereason
 * @property string $bison_latestatus
 * @property string $lgh_reftype
 * @property string $lgh_refnum
 * @property string $trc_type1name
 * @property string $trc_type2name
 * @property string $trc_type3name
 * @property string $trc_type4name
 * @property string $next_stp_event_code
 * @property string $next_stop_of_total
 * @property string $lgh_comment
 * @property int $lgh_miles
 * @property float $lgh_linehaul
 * @property float $lgh_ord_charge
 * @property float $lgh_act_weight
 * @property float $lgh_est_weight
 * @property float $lgh_tot_weight
 * @property string $lgh_max_weight_exceeded
 * @property int $lgh_detstatus
 * @property int $lgh_tmstatusstopnumber
 * @property string $lgh_tm_statusname
 * @property string $ord_billto
 * @property string $lgh_order_source
 * @property string $lgh_washplan
 * @property string $lgh_hzd_cmd_class
 * @property string $ord_company
 * @property string $lgh_originzip
 * @property string $lgh_destzip
 * @property string $lgh_route
 * @property string $lgh_booked_revtype1
 * @property string $lgh_204status
 * @property string $lgh_204date
 * @property string $lgh_permit_status
 * @property string $lgh_trc_comment
 * @property string $lgh_ace_status
 * @property string $next_ndrp_cmpid
 * @property string $next_ndrp_cmpname
 * @property string $next_ndrp_ctyname
 * @property string $next_ndrp_state
 * @property string $next_ndrp_arrivaldate
 * @property string $lgh_ace_status_name
 * @property string $lgh_chassis
 * @property string $lgh_chassis2
 * @property string $lgh_204_tradingpartner
 * @property int $lgh_total_mov_bill_miles
 * @property int $lgh_total_mov_miles
 * @property string $lgh_mile_overage_message
 * @property int $lgh_car_rate
 * @property int $lgh_car_charge
 * @property float $lgh_car_accessorials
 * @property int $lgh_car_totalcharge
 * @property string $lgh_recommended_car_id
 * @property string $lgh_spot_rate_updatedby
 * @property string $lgh_spot_rate_updateddt
 * @property string $lgh_spot_rate
 * @property string $lgh_ship_status
 * @property int $lgh_protected_rate
 * @property int $lgh_avg_rate
 * @property string $lgh_edi_counter
 * @property string $lgh_faxemail_created
 * @property int $lgh_externalrating_miles
 * @property int $lgh_acc_fsc
 * @property string $lgh_prev_seg_status
 * @property string $lgh_prev_seg_status_last_updated
 * @property string $lgh_raildispatchstatus
 * @property int $ma_transaction_id
 * @property int $ma_tour_number
 * @property int $ma_tour_sequence
 * @property int $ma_tour_max_sequence
 * @property string $ma_mpp_id
 * @property string $ma_trc_number
 * @property int $ma_lgh_number
 * @property string $lgh_dolly
 * @property string $lgh_dolly2
 * @property string $lgh_trailer3
 * @property string $lgh_trailer4
 * @property string $lgh_other_status1
 * @property string $lgh_other_status2
 * @property string $lgh_direct_route_status1
 * @property string $trc_teamleader
 * @property string $lgh_optimizestatus
 * @property int $lgh_optimizedrouteid
 * @property float $lgh_autoloadmaxgvw
 * @property string $lgh_drv_tndr_status
 */
class LegheaderActive extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Legheader_Active';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'lgh_number';

    protected $fillable = ['lgh_firstlegnumber', 'lgh_lastlegnumber', 'lgh_drvtripnumber', 'lgh_cost', 'lgh_revenue', 'lgh_odometerstart', 'lgh_odometerend', 'lgh_milesshortest', 'lgh_milespractical', 'lgh_allocfactor', 'lgh_startdate', 'lgh_enddate', 'lgh_startcity', 'lgh_endcity', 'lgh_startregion1', 'lgh_endregion1', 'lgh_startstate', 'lgh_endstate', 'lgh_outstatus', 'lgh_startlat', 'lgh_startlong', 'lgh_endlat', 'lgh_endlong', 'lgh_class1', 'lgh_class2', 'lgh_class3', 'lgh_class4', 'stp_number_start', 'stp_number_end', 'cmp_id_start', 'cmp_id_end', 'lgh_startregion2', 'lgh_startregion3', 'lgh_startregion4', 'lgh_endregion2', 'lgh_endregion3', 'lgh_endregion4', 'lgh_instatus', 'lgh_driver1', 'lgh_driver2', 'lgh_tractor', 'lgh_primary_trailer', 'mov_number', 'fgt_number', 'lgh_priority', 'lgh_schdtearliest', 'lgh_schdtlatest', 'cmd_code', 'fgt_description', 'mpp_teamleader', 'mpp_fleet', 'mpp_division', 'mpp_domicile', 'mpp_company', 'mpp_terminal', 'mpp_type1', 'mpp_type2', 'mpp_type3', 'mpp_type4', 'trc_company', 'trc_division', 'trc_fleet', 'trc_terminal', 'trc_type1', 'trc_type2', 'trc_type3', 'trc_type4', 'mfh_number', 'trl_company', 'trl_fleet', 'trl_division', 'trl_terminal', 'trl_type1', 'trl_type2', 'trl_type3', 'trl_type4', 'ord_hdrnumber', 'timestamp', 'lgh_fueltaxstatus', 'lgh_mtmiles', 'lgh_prjdate1', 'lgh_etaalert1', 'lgh_etamins1', 'lgh_outofroute_routing', 'lgh_type1', 'lgh_alloc_revenue', 'lgh_primary_pup', 'lgh_prod_hr', 'lgh_tot_hr', 'lgh_ld_unld_time', 'lgh_load_time', 'lgh_startcty_nmstct', 'lgh_endcty_nmstct', 'lgh_carrier', 'lgh_enddate_arrival', 'lgh_dsp_date', 'lgh_geo_date', 'lgh_nexttrailer1', 'lgh_nexttrailer2', 'lgh_etamilestofinal', 'lgh_etamintofinal', 'lgh_split_flag', 'lgh_createdby', 'lgh_createdon', 'lgh_createapp', 'lgh_updatedby', 'lgh_updatedon', 'lgh_updateapp', 'lgh_rstartdate', 'lgh_renddate', 'lgh_rstartcity', 'lgh_rendcity', 'lgh_rstartregion1', 'lgh_rendregion1', 'lgh_rstartstate', 'lgh_rendstate', 'lgh_rstartlat', 'lgh_rstartlong', 'lgh_rendlat', 'lgh_rendlong', 'stp_number_rstart', 'stp_number_rend', 'cmp_id_rstart', 'cmp_id_rend', 'lgh_rstartregion2', 'lgh_rstartregion3', 'lgh_rstartregion4', 'lgh_rendregion2', 'lgh_rendregion3', 'lgh_rendregion4', 'lgh_rstartcty_nmstct', 'lgh_rendcty_nmstct', 'lgh_feetavailable', 'can_cap_expires', 'can_ld_expires', 'lgh_dispatchdate', 'lgh_asset_lock', 'lgh_asset_lock_dtm', 'lgh_asset_lock_user', 'lgh_load_origin', 'lgh_est_lhrate', 'lgh_est_lhpay', 'lgh_est_dhrate', 'lgh_est_dhpay', 'lgh_est_accessorials', 'drvplan_number', 'next_drp_stp_number', 'next_pup_stp_number', 'ord_totalweight', 'ord_totalvolume', 'tot_count', 'cmd_count', 'ordercount', 'xdock', 'ord_stopcount', 'washstatus', 'ref_type', 'ref_number', 'npup_cmpid', 'npup_cmpname', 'npup_ctyname', 'npup_state', 'npup_arrivaldate', 'ndrp_cmpid', 'ndrp_cmpname', 'ndrp_ctyname', 'ndrp_state', 'ndrp_arrivaldate', 'npup_departuredate', 'ndrp_departuredate', 'lgh_type2', 'lgh_extrainfo1', 'lgh_extrainfo2', 'lgh_extrainfo3', 'lgh_extrainfo4', 'lgh_extrainfo5', 'lgh_extrainfo6', 'lgh_extrainfo7', 'lgh_extrainfo8', 'lgh_extrainfo9', 'lgh_extrainfo10', 'lgh_extrainfo11', 'lgh_extrainfo12', 'lgh_extrainfo13', 'lgh_extrainfo14', 'lgh_extrainfo15', 'lgh_tm_status', 'lgh_tour_number', 'o_cmpname', 'o_state', 'd_cmpname', 'd_state', 'f_cmpid', 'f_cmpname', 'f_ctyname', 'f_state', 'l_cmpid', 'l_cmpname', 'l_ctyname', 'l_state', 'evt_driver1_name', 'evt_driver2_name', 'lgh_outstatus_name', 'lgh_instatus_name', 'lgh_priority_name', 'trl_type1_name', 'lgh_class1_name', 'lgh_class2_name', 'lgh_class3_name', 'lgh_class4_name', 'opt_trc_type4_label', 'opt_trl_type4_label', 'c_lgh_type1', 'c_lgh_type2', 'mpp_fleet_name', 'ord_ord_subcompany', 'ord_bookedby', 'ord_trl_type1', 'ord_totalmiles', 'o_cmp_geoloc', 'd_cmp_geoloc', 'd_address1', 'd_address2', 'bison_latereason', 'bison_latestatus', 'lgh_reftype', 'lgh_refnum', 'trc_type1name', 'trc_type2name', 'trc_type3name', 'trc_type4name', 'next_stp_event_code', 'next_stop_of_total', 'lgh_comment', 'lgh_miles', 'lgh_linehaul', 'lgh_ord_charge', 'lgh_act_weight', 'lgh_est_weight', 'lgh_tot_weight', 'lgh_max_weight_exceeded', 'lgh_detstatus', 'lgh_tmstatusstopnumber', 'lgh_tm_statusname', 'ord_billto', 'lgh_order_source', 'lgh_washplan', 'lgh_hzd_cmd_class', 'ord_company', 'lgh_originzip', 'lgh_destzip', 'lgh_route', 'lgh_booked_revtype1', 'lgh_204status', 'lgh_204date', 'lgh_permit_status', 'lgh_trc_comment', 'lgh_ace_status', 'next_ndrp_cmpid', 'next_ndrp_cmpname', 'next_ndrp_ctyname', 'next_ndrp_state', 'next_ndrp_arrivaldate', 'lgh_ace_status_name', 'lgh_chassis', 'lgh_chassis2', 'lgh_204_tradingpartner', 'lgh_total_mov_bill_miles', 'lgh_total_mov_miles', 'lgh_mile_overage_message', 'lgh_car_rate', 'lgh_car_charge', 'lgh_car_accessorials', 'lgh_car_totalcharge', 'lgh_recommended_car_id', 'lgh_spot_rate_updatedby', 'lgh_spot_rate_updateddt', 'lgh_spot_rate', 'lgh_ship_status', 'lgh_protected_rate', 'lgh_avg_rate', 'lgh_edi_counter', 'lgh_faxemail_created', 'lgh_externalrating_miles', 'lgh_acc_fsc', 'lgh_prev_seg_status', 'lgh_prev_seg_status_last_updated', 'lgh_raildispatchstatus', 'ma_transaction_id', 'ma_tour_number', 'ma_tour_sequence', 'ma_tour_max_sequence', 'ma_mpp_id', 'ma_trc_number', 'ma_lgh_number', 'lgh_dolly', 'lgh_dolly2', 'lgh_trailer3', 'lgh_trailer4', 'lgh_other_status1', 'lgh_other_status2', 'lgh_direct_route_status1', 'trc_teamleader', 'lgh_optimizestatus', 'lgh_optimizedrouteid', 'lgh_autoloadmaxgvw', 'lgh_drv_tndr_status'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
