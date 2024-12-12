<?php

namespace App\Models\psbison;

use App\Models\sqlweb\datawarehouse\StopsAutoActualizationByTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

/**
 * @property int $ord_hdrnumber
 * @property int $stp_number
 * @property string $cmp_id
 * @property string $stp_region1
 * @property string $stp_region2
 * @property string $stp_region3
 * @property int $stp_city
 * @property string $stp_state
 * @property string $stp_schdtearliest
 * @property string $stp_origschdt
 * @property string $stp_arrivaldate
 * @property string $stp_departuredate
 * @property string $stp_reasonlate
 * @property string $stp_schdtlatest
 * @property int $lgh_number
 * @property int $mfh_number
 * @property string $stp_type
 * @property string $stp_paylegpt
 * @property int $shp_hdrnumber
 * @property int $stp_sequence
 * @property string $stp_region4
 * @property int $stp_lgh_sequence
 * @property string $trl_id
 * @property int $stp_mfh_sequence
 * @property string $stp_event
 * @property string $stp_mfh_position
 * @property string $stp_lgh_position
 * @property string $stp_mfh_status
 * @property string $stp_lgh_status
 * @property int $stp_ord_mileage
 * @property int $stp_lgh_mileage
 * @property int $stp_mfh_mileage
 * @property int $mov_number
 * @property mixed $timestamp
 * @property string $stp_loadstatus
 * @property float $stp_weight
 * @property string $stp_weightunit
 * @property string $cmd_code
 * @property string $stp_description
 * @property float $stp_count
 * @property string $stp_countunit
 * @property string $cmp_name
 * @property string $stp_comment
 * @property string $stp_status
 * @property string $stp_reftype
 * @property string $stp_refnum
 * @property string $stp_reasonlate_depart
 * @property string $stp_screenmode
 * @property int $skip_trigger
 * @property float $stp_volume
 * @property string $stp_volumeunit
 * @property int $stp_dispatched_sequence
 * @property string $stp_arr_confirmed
 * @property string $stp_dep_confirmed
 * @property string $stp_type1
 * @property string $stp_redeliver
 * @property string $stp_osd
 * @property string $stp_pudelpref
 * @property string $stp_phonenumber
 * @property float $stp_delayhours
 * @property float $stp_ooa_mileage
 * @property string $stp_zipcode
 * @property int $stp_OOA_stop
 * @property string $stp_address
 * @property int $stp_transfer_stp
 * @property string $stp_phonenumber2
 * @property string $stp_address2
 * @property string $stp_contact
 * @property string $stp_podname
 * @property string $stp_custpickupdate
 * @property string $stp_custdeliverydate
 * @property int $stp_cmp_close
 * @property string $stp_activitystart_dt
 * @property string $stp_activityend_dt
 * @property string $stp_departure_status
 * @property string $stp_eta
 * @property string $stp_etd
 * @property string $stp_transfer_type
 * @property int $stp_trip_mileage
 * @property string $stp_stl_mileage_flag
 * @property int $tmp_evt_number
 * @property int $tmp_fgt_number
 * @property int $stp_pallets_in
 * @property int $stp_pallets_out
 * @property int $stp_pallets_received
 * @property int $stp_pallets_shipped
 * @property int $stp_pallets_rejected
 * @property int $psh_number
 * @property int $stp_dispatched_status
 * @property string $stp_reasonlate_text
 * @property string $stp_reasonlate_depart_text
 * @property int $stp_advreturnempty
 * @property string $stp_country
 * @property float $stp_loadingmeters
 * @property string $stp_loadingmetersunit
 * @property float $stp_cod_amount
 * @property string $stp_cod_currency
 * @property float $stp_extra_count
 * @property float $stp_extra_weight
 * @property int $bison_appt
 * @property string $stp_tmstatus
 * @property int $stp_detstatus
 * @property int $stp_alloweddet
 * @property float $stp_gfc_arr_radius
 * @property string $stp_gfc_arr_radiusunits
 * @property int $stp_gfc_arr_timeout
 * @property int $stp_est_drv_time
 * @property int $stp_est_activity
 * @property int $nlm_time_diff
 * @property float $stp_gfc_arv_radiusMiles
 * @property float $stp_gfc_dep_radiusMiles
 * @property float $stp_gfc_lat
 * @property float $stp_gfc_long
 * @property string $stp_aad_arvTime
 * @property int $stp_aad_arvConfidence
 * @property string $stp_aad_depTime
 * @property int $stp_aad_depConfidence
 * @property float $stp_aad_lastckc_lat
 * @property float $stp_aad_lastckc_long
 * @property string $stp_aad_lastckc_time
 * @property int $stp_aad_lastckc_tripStatus
 * @property float $stp_aad_laststartckc_lat
 * @property float $stp_aad_laststartckc_long
 * @property string $stp_aad_laststartckc_time
 * @property int $stp_aad_laststartckc_tripStatus
 * @property float $stp_aad_arvckc_lat
 * @property float $stp_aad_arvckc_long
 * @property string $stp_aad_arvckc_time
 * @property int $stp_aad_arvckc_tripStatus
 * @property float $stp_aad_depckc_lat
 * @property float $stp_aad_depckc_long
 * @property string $stp_aad_depckc_time
 * @property int $stp_aad_depckc_tripStatus
 * @property string $last_updateby
 * @property string $last_updatedate
 * @property int $stp_lgh_mileage_mtid
 * @property float $stp_count2
 * @property string $stp_countunit2
 * @property int $stp_ord_toll_cost
 * @property int $stp_ord_mileage_mtid
 * @property int $stp_ooa_mileage_mtid
 * @property string $last_updatebydepart
 * @property string $last_updatedatedepart
 * @property string $stp_unload_paytype
 * @property string $stp_transferred
 * @property string $stp_GeoCodeRequested
 * @property int $stp_reasonlate_min
 * @property int $stp_reasonlate_depart_min
 * @property int $stp_lgh_mileage_stlrate
 * @property int $stp_ord_mileage_stlrate
 * @property string $stp_rescheduledate
 * @property string $stp_showas_cmpid
 * @property string $stp_origarrival
 * @property string $stp_type2
 * @property string $stp_type3
 * @property string $stp_timewindow
 * @property string $stp_firm_appt_flag
 * @property string $stp_delay_eligible
 * @property string $stp_mileagetype
 * @property int $stp_ico_stp_number_child
 * @property int $stp_span_days
 * @property string $stp_AppointmentStatus
 * @property string $RailServiceLevel
 * @property string $stp_CustomerRequestDate
 * @property float $stp_rpt_miles
 * @property int $stp_rpt_miles_mtid
 * @property string $stp_empty_split
 * @property string $stp_optimizationdate
 * @property int $stp_ico_stp_number_parent
 * @property string $stp_app_eqcodes
 * @property string $trl_id2
 * @property string $trl_id3
 * @property string $INS_TIMESTAMP
 */
class Stops extends Model
{
    use HasFactory;

    const CREATED_AT = 'INS_TIMESTAMP';

    const UPDATED_AT = null;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Stops';

    protected $fillable = ['ord_hdrnumber', 'stp_number', 'cmp_id', 'stp_region1', 'stp_region2', 'stp_region3', 'stp_city', 'stp_state', 'stp_schdtearliest', 'stp_origschdt', 'stp_arrivaldate', 'stp_departuredate', 'stp_reasonlate', 'stp_schdtlatest', 'lgh_number', 'mfh_number', 'stp_type', 'stp_paylegpt', 'shp_hdrnumber', 'stp_sequence', 'stp_region4', 'stp_lgh_sequence', 'trl_id', 'stp_mfh_sequence', 'stp_event', 'stp_mfh_position', 'stp_lgh_position', 'stp_mfh_status', 'stp_lgh_status', 'stp_ord_mileage', 'stp_lgh_mileage', 'stp_mfh_mileage', 'mov_number', 'timestamp', 'stp_loadstatus', 'stp_weight', 'stp_weightunit', 'cmd_code', 'stp_description', 'stp_count', 'stp_countunit', 'cmp_name', 'stp_comment', 'stp_status', 'stp_reftype', 'stp_refnum', 'stp_reasonlate_depart', 'stp_screenmode', 'skip_trigger', 'stp_volume', 'stp_volumeunit', 'stp_dispatched_sequence', 'stp_arr_confirmed', 'stp_dep_confirmed', 'stp_type1', 'stp_redeliver', 'stp_osd', 'stp_pudelpref', 'stp_phonenumber', 'stp_delayhours', 'stp_ooa_mileage', 'stp_zipcode', 'stp_OOA_stop', 'stp_address', 'stp_transfer_stp', 'stp_phonenumber2', 'stp_address2', 'stp_contact', 'stp_podname', 'stp_custpickupdate', 'stp_custdeliverydate', 'stp_cmp_close', 'stp_activitystart_dt', 'stp_activityend_dt', 'stp_departure_status', 'stp_eta', 'stp_etd', 'stp_transfer_type', 'stp_trip_mileage', 'stp_stl_mileage_flag', 'tmp_evt_number', 'tmp_fgt_number', 'stp_pallets_in', 'stp_pallets_out', 'stp_pallets_received', 'stp_pallets_shipped', 'stp_pallets_rejected', 'psh_number', 'stp_dispatched_status', 'stp_reasonlate_text', 'stp_reasonlate_depart_text', 'stp_advreturnempty', 'stp_country', 'stp_loadingmeters', 'stp_loadingmetersunit', 'stp_cod_amount', 'stp_cod_currency', 'stp_extra_count', 'stp_extra_weight', 'bison_appt', 'stp_tmstatus', 'stp_detstatus', 'stp_alloweddet', 'stp_gfc_arr_radius', 'stp_gfc_arr_radiusunits', 'stp_gfc_arr_timeout', 'stp_est_drv_time', 'stp_est_activity', 'nlm_time_diff', 'stp_gfc_arv_radiusMiles', 'stp_gfc_dep_radiusMiles', 'stp_gfc_lat', 'stp_gfc_long', 'stp_aad_arvTime', 'stp_aad_arvConfidence', 'stp_aad_depTime', 'stp_aad_depConfidence', 'stp_aad_lastckc_lat', 'stp_aad_lastckc_long', 'stp_aad_lastckc_time', 'stp_aad_lastckc_tripStatus', 'stp_aad_laststartckc_lat', 'stp_aad_laststartckc_long', 'stp_aad_laststartckc_time', 'stp_aad_laststartckc_tripStatus', 'stp_aad_arvckc_lat', 'stp_aad_arvckc_long', 'stp_aad_arvckc_time', 'stp_aad_arvckc_tripStatus', 'stp_aad_depckc_lat', 'stp_aad_depckc_long', 'stp_aad_depckc_time', 'stp_aad_depckc_tripStatus', 'last_updateby', 'last_updatedate', 'stp_lgh_mileage_mtid', 'stp_count2', 'stp_countunit2', 'stp_ord_toll_cost', 'stp_ord_mileage_mtid', 'stp_ooa_mileage_mtid', 'last_updatebydepart', 'last_updatedatedepart', 'stp_unload_paytype', 'stp_transferred', 'stp_GeoCodeRequested', 'stp_reasonlate_min', 'stp_reasonlate_depart_min', 'stp_lgh_mileage_stlrate', 'stp_ord_mileage_stlrate', 'stp_rescheduledate', 'stp_showas_cmpid', 'stp_origarrival', 'stp_type2', 'stp_type3', 'stp_timewindow', 'stp_firm_appt_flag', 'stp_delay_eligible', 'stp_mileagetype', 'stp_ico_stp_number_child', 'stp_span_days', 'stp_AppointmentStatus', 'RailServiceLevel', 'stp_CustomerRequestDate', 'stp_rpt_miles', 'stp_rpt_miles_mtid', 'stp_empty_split', 'stp_optimizationdate', 'stp_ico_stp_number_parent', 'stp_app_eqcodes', 'trl_id2', 'trl_id3', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';

    // Relationships
    /**
     * @return HasOne<StopsAutoActualizationByTime>
     */
    public function stopsAutoActualizationByTime(): HasOne
    {
        return $this->hasOne(StopsAutoActualizationByTime::class, 'stp_number', 'stp_number');
    }

    /**
     * @return HasOne<Event>
     */
    public function event(): HasOne
    {
        return $this->hasOne(Event::class, 'stp_number', 'stp_number');
    }

    // Methods

    /**
     * @param  Collection<int, int>  $stopNumbers
     * @return Collection<int, Stops>
     */
    public function getStatusByStopNumbers(Collection $stopNumbers): Collection
    {

        return $this::whereIn('stp_number', $stopNumbers)->get();
    }
}
