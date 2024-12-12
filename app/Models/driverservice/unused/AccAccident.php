<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $acc_id
 * @property string $mpp_id
 * @property string $mpp_fleet
 * @property string $mpp_last
 * @property string $mpp_first
 * @property string $mpp_license
 * @property string $mpp_province
 * @property string $mpp_birthday
 * @property string $mpp_restrictions
 * @property string $mpp_phone
 * @property string $mpp_type
 * @property int $acc_fault
 * @property string $acc_prevent
 * @property int $acc_incident
 * @property int $acc_reportable
 * @property int $acc_hazmat
 * @property int $acc_safedriver
 * @property string $acc_opendate
 * @property string $acc_date
 * @property string $acc_closedate
 * @property int $acc_thirdparty
 * @property int $acc_tpamount
 * @property string $acc_tpname
 * @property string $acc_mpiclaim
 * @property string $acc_mpicargoclaim
 * @property string $acc_mpiinv
 * @property int $acc_mpiamount
 * @property string $acc_tpinv
 * @property int $acc_downamount
 * @property string $acc_location
 * @property string $acc_city
 * @property string $acc_province
 * @property string $acc_accidentphone
 * @property string $acc_policereport
 * @property string $acc_officer
 * @property string $acc_officephone
 * @property string $acc_officerdetahcment
 * @property string $acc_cruiser
 * @property string $acc_drvcitation
 * @property string $acc_othercitation
 * @property string $acc_drvoffense
 * @property string $acc_otheroffense
 * @property float $acc_drvhours
 * @property int $acc_daysoutsince48
 * @property float $acc_hrsleft8
 * @property string $acc_triporigin
 * @property string $acc_tripdestination
 * @property string $acc_description
 * @property string $acc_propertydamage
 * @property float $acc_yearsexp
 * @property float $acc_lengthemp
 * @property string $acc_locationphone
 * @property int $vio_code
 * @property int $acc_uscitation
 * @property int $acc_ustowed
 * @property int $acc_usfatal
 * @property int $acc_usinjuries
 * @property int $acc_oocoststrc
 * @property int $acc_oocoststrl
 * @property int $acc_oocostscargo
 * @property int $acc_oocoststp
 * @property int $acc_policereportorder
 * @property int $acc_propdmgrecov
 * @property int $acc_pointsassessed
 * @property int $acc_interview
 * @property string $acc_status
 * @property string $acc_progress
 * @property string $acc_recovparty
 * @property string $acc_invoice1
 * @property string $acc_invoice2
 * @property string $acc_roadcond
 * @property string $acc_weathercond
 * @property float $acc_expenseamt
 * @property float $acc_physicaldamage
 * @property float $acc_bodilyinjury
 * @property int $acc_trainreq
 * @property int $acc_traincomp
 * @property int $acc_oodrvtobededuct
 * @property int $acc_oodrvdeduct
 * @property int $acc_oodrvreimb
 * @property int $acc_oodrvcomp
 * @property int $wtg_drvreport
 * @property int $wtg_est
 * @property int $wtg_trk_repairs
 * @property int $wtg_trl_repairs
 * @property int $wtg_bisoninv
 * @property int $wtg_payment
 * @property int $wtg_acct
 * @property int $wtg_mpi
 * @property int $wtg_tpinv
 * @property int $wtg_release
 * @property string $acc_lastupdate
 * @property int $acc_isaccident
 * @property int $acc_iscargo
 * @property string $acc_enterdate
 * @property string $acc_liability
 * @property string $acc_region
 * @property string $acc_cause
 * @property string $acc_lastupdateby
 * @property int $clm_id
 * @property string $old_prevent
 * @property int $sdrp_reset
 * @property int $sdrp_newrate
 * @property int $sdrp_acctype
 * @property string $mpp_division
 * @property int $sdrp_resetdrv
 * @property int $acc_reportableTP
 * @property float $acc_SafetyScore
 * @property int $acc_noInjuries
 * @property int $acc_bisonPersonal
 * @property string $acc_quantitySpilled
 * @property string $acc_whoCalledEnv
 * @property int $acc_tpCheckbox
 * @property int $acc_treatedAtScene
 * @property int $acc_ambulance
 * @property int $acc_ambulanceOnScene
 * @property int $acc_areaSecuredYes
 * @property int $acc_areaSecuredNo
 * @property string $acc_securedHow
 * @property int $acc_towContacted
 * @property int $acc_byPolice
 * @property int $acc_byShop
 * @property int $acc_fuelSpill
 * @property int $acc_hazmatSpill
 * @property int $acc_spillContained
 * @property string $acc_hazmatClass
 * @property int $acc_directorOfSafety
 * @property int $acc_environmental
 * @property int $acc_ministry
 * @property int $acc_policeOnScene
 * @property int $acc_policeContact
 * @property int $acc_fireOnScene
 * @property int $acc_fireContacted
 * @property int $acc_witnessInfo
 * @property int $acc_picturesYes
 * @property int $acc_picturesNo
 * @property int $acc_bisonAndTP
 * @property int $acc_skidmarks
 * @property int $acc_tpLicensePlate
 * @property int $acc_roadway
 * @property int $acc_other
 * @property string $acc_speedTravelling
 * @property int $acc_cruise
 * @property string $acc_postedSpeed
 * @property int $acc_visibleSkidMarks
 * @property string $acc_distanceBrakesApplied
 * @property string $acc_numberLanes
 * @property string $acc_direction
 * @property string $acc_lane
 * @property string $acc_traffic
 * @property int $acc_sunYes
 * @property int $acc_sunNo
 * @property string $acc_controlDevices
 * @property int $acc_tracUpright
 * @property int $acc_tracDS
 * @property int $acc_tracPS
 * @property int $acc_tracBlocking
 * @property int $acc_tracinDitch
 * @property int $acc_propertyDamageYes
 * @property int $acc_propertyDamageNo
 * @property int $acc_trailerContentsYes
 * @property int $acc_trailerContentsNo
 * @property string $acc_trailerContentsExplain
 * @property string $acc_driverRescuedLocation
 * @property int $acc_drugAlcoholYes
 * @property int $acc_drugAlcoholNo
 * @property int $acc_driverRescuedYes
 * @property int $acc_driverRescuedNo
 * @property int $acc_operateBisonYes
 * @property int $acc_operateBisonNo
 * @property int $acc_groundedYes
 * @property int $acc_groundedNo
 * @property int $acc_consumedrugYes
 * @property int $acc_consumedrugNo
 * @property string $acc_consumedrugExplain
 * @property int $acc_medRestrictionYes
 * @property int $acc_medRestrictionNo
 * @property string $acc_medRestrictionExplain
 * @property int $acc_correctiveLensesYes
 * @property int $acc_correctiveLensesNo
 * @property int $acc_wearingLensesYes
 * @property int $acc_wearingLensesNo
 * @property int $acc_trlUpright
 * @property int $acc_trlDS
 * @property int $acc_trlPS
 * @property int $acc_trlBlocking
 * @property int $acc_trlinDitch
 * @property string $acc_propertyDamageExplain
 * @property string $car_id
 * @property int $acc_carrierfault
 */
class AccAccident extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Acc_Accident';

    protected $fillable = ['acc_id', 'mpp_id', 'mpp_fleet', 'mpp_last', 'mpp_first', 'mpp_license', 'mpp_province', 'mpp_birthday', 'mpp_restrictions', 'mpp_phone', 'mpp_type', 'acc_fault', 'acc_prevent', 'acc_incident', 'acc_reportable', 'acc_hazmat', 'acc_safedriver', 'acc_opendate', 'acc_date', 'acc_closedate', 'acc_thirdparty', 'acc_tpamount', 'acc_tpname', 'acc_mpiclaim', 'acc_mpicargoclaim', 'acc_mpiinv', 'acc_mpiamount', 'acc_tpinv', 'acc_downamount', 'acc_location', 'acc_city', 'acc_province', 'acc_accidentphone', 'acc_policereport', 'acc_officer', 'acc_officephone', 'acc_officerdetahcment', 'acc_cruiser', 'acc_drvcitation', 'acc_othercitation', 'acc_drvoffense', 'acc_otheroffense', 'acc_drvhours', 'acc_daysoutsince48', 'acc_hrsleft8', 'acc_triporigin', 'acc_tripdestination', 'acc_description', 'acc_propertydamage', 'acc_yearsexp', 'acc_lengthemp', 'acc_locationphone', 'vio_code', 'acc_uscitation', 'acc_ustowed', 'acc_usfatal', 'acc_usinjuries', 'acc_oocoststrc', 'acc_oocoststrl', 'acc_oocostscargo', 'acc_oocoststp', 'acc_policereportorder', 'acc_propdmgrecov', 'acc_pointsassessed', 'acc_interview', 'acc_status', 'acc_progress', 'acc_recovparty', 'acc_invoice1', 'acc_invoice2', 'acc_roadcond', 'acc_weathercond', 'acc_expenseamt', 'acc_physicaldamage', 'acc_bodilyinjury', 'acc_trainreq', 'acc_traincomp', 'acc_oodrvtobededuct', 'acc_oodrvdeduct', 'acc_oodrvreimb', 'acc_oodrvcomp', 'wtg_drvreport', 'wtg_est', 'wtg_trk_repairs', 'wtg_trl_repairs', 'wtg_bisoninv', 'wtg_payment', 'wtg_acct', 'wtg_mpi', 'wtg_tpinv', 'wtg_release', 'acc_lastupdate', 'acc_isaccident', 'acc_iscargo', 'acc_enterdate', 'acc_liability', 'acc_region', 'acc_cause', 'acc_lastupdateby', 'clm_id', 'old_prevent', 'sdrp_reset', 'sdrp_newrate', 'sdrp_acctype', 'mpp_division', 'sdrp_resetdrv', 'acc_reportableTP', 'acc_SafetyScore', 'acc_noInjuries', 'acc_bisonPersonal', 'acc_quantitySpilled', 'acc_whoCalledEnv', 'acc_tpCheckbox', 'acc_treatedAtScene', 'acc_ambulance', 'acc_ambulanceOnScene', 'acc_areaSecuredYes', 'acc_areaSecuredNo', 'acc_securedHow', 'acc_towContacted', 'acc_byPolice', 'acc_byShop', 'acc_fuelSpill', 'acc_hazmatSpill', 'acc_spillContained', 'acc_hazmatClass', 'acc_directorOfSafety', 'acc_environmental', 'acc_ministry', 'acc_policeOnScene', 'acc_policeContact', 'acc_fireOnScene', 'acc_fireContacted', 'acc_witnessInfo', 'acc_picturesYes', 'acc_picturesNo', 'acc_bisonAndTP', 'acc_skidmarks', 'acc_tpLicensePlate', 'acc_roadway', 'acc_other', 'acc_speedTravelling', 'acc_cruise', 'acc_postedSpeed', 'acc_visibleSkidMarks', 'acc_distanceBrakesApplied', 'acc_numberLanes', 'acc_direction', 'acc_lane', 'acc_traffic', 'acc_sunYes', 'acc_sunNo', 'acc_controlDevices', 'acc_tracUpright', 'acc_tracDS', 'acc_tracPS', 'acc_tracBlocking', 'acc_tracinDitch', 'acc_propertyDamageYes', 'acc_propertyDamageNo', 'acc_trailerContentsYes', 'acc_trailerContentsNo', 'acc_trailerContentsExplain', 'acc_driverRescuedLocation', 'acc_drugAlcoholYes', 'acc_drugAlcoholNo', 'acc_driverRescuedYes', 'acc_driverRescuedNo', 'acc_operateBisonYes', 'acc_operateBisonNo', 'acc_groundedYes', 'acc_groundedNo', 'acc_consumedrugYes', 'acc_consumedrugNo', 'acc_consumedrugExplain', 'acc_medRestrictionYes', 'acc_medRestrictionNo', 'acc_medRestrictionExplain', 'acc_correctiveLensesYes', 'acc_correctiveLensesNo', 'acc_wearingLensesYes', 'acc_wearingLensesNo', 'acc_trlUpright', 'acc_trlDS', 'acc_trlPS', 'acc_trlBlocking', 'acc_trlinDitch', 'acc_propertyDamageExplain', 'car_id', 'acc_carrierfault'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
