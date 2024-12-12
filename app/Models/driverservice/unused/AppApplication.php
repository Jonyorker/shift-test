<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $NAME
 * @property string $CITY
 * @property string $POSITION
 * @property string $PARTNER
 * @property string $ADAT
 * @property string $TELE
 * @property int $TEAM
 * @property int $SINGLE
 * @property float $EXPYRS
 * @property int $CDN
 * @property int $USA
 * @property int $LONGH
 * @property int $MTNS
 * @property int $SHORH
 * @property int $ROADT
 * @property int $ICC
 * @property int $REFCHK
 * @property int $IVIEW
 * @property int $POLICE
 * @property int $ABSTRACT
 * @property string $STATUS
 * @property string $SHORTREASON
 * @property string $REASON
 * @property string $CBKDAT
 * @property string $SUPV
 * @property string $PDAT
 * @property string $PROV
 * @property string $POST
 * @property string $ADD1
 * @property string $ADD2
 * @property string $FAX
 * @property string $FAXMAIL
 * @property string $APPRECD
 * @property int $CLASS1AZ
 * @property string $SOURCE
 * @property string $SOURCEDRVR
 * @property int $ENTERUS
 * @property int $ACCID
 * @property string $ACCIDM
 * @property string $TRIPDUR
 * @property string $POSN
 * @property int $TORONTO
 * @property string $REFCOMPL
 * @property float $YMTNS
 * @property float $YUSA
 * @property float $YCDN
 * @property float $YTORONTO
 * @property string $birthdate
 * @property string $sin
 * @property int $drvlic
 * @property int $cvor
 * @property int $proofcit
 * @property string $approveby
 * @property string $approvedate
 * @property string $signby
 * @property string $signdate
 * @property string $interviewby
 * @property string $interviewdate
 * @property string $roadtestdate
 * @property string $drugtestdate
 * @property string $milesoption
 * @property string $conditions
 * @property string $orientdate
 * @property int $preemploy
 * @property int $smoker
 * @property string $hotelpo
 * @property string $hotelfrom
 * @property string $hotelto
 * @property string $checkcalldate
 * @property string $fleet
 * @property string $drivercode
 * @property string $oounit
 * @property string $ridein
 * @property int $reimburse
 * @property int $datasheet
 * @property string $rdtestsignoffdate
 * @property string $rdtestsignoffby
 * @property string $rideinordnum
 * @property string $interviewnotes
 * @property int $arrangements
 * @property int $CDRP
 * @property int $nonsmoker
 * @property int $bonus_sign_active
 * @property int $bonus_refer_active
 * @property string $bonus_refer_who
 * @property string $apptakenby
 * @property int $bonus_refer_RRSP
 * @property int $bonus_refer_elig
 * @property string $callback_reason
 * @property string $decline_date
 * @property string $decline_by
 * @property string $app_sent
 * @property string $app_sentby
 * @property string $app_format
 * @property string $app_emailaddr
 * @property string $app_status
 * @property string $app_inqrefby
 * @property string $app_nosentreason
 * @property string $systemcomment
 * @property string $app_inqfollowup
 * @property int $app_fastcard
 * @property int $app_signedpayscale
 * @property int $app_orientkit
 * @property int $app_other
 * @property string $app_otherdesc
 * @property int $coe_mindays
 * @property string $coe_tractoryard
 * @property int $coe_signonbonus
 * @property string $coe_payscaletype
 * @property string $coe_timeoff
 * @property string $coe_missingdoc
 * @property string $coe_preference
 * @property string $coe_additional
 * @property int $coe_nonyc
 * @property int $coe_interimss
 * @property string $app_terminal
 * @property string $app_division
 * @property int $app_waiver
 * @property int $app_pardon
 * @property string $bonus_refer_HR
 * @property string $app_lastcommentdate
 * @property string $app_orientloc
 * @property string $app_driverprogram
 * @property int $bonus_sign_elig
 * @property float $YCITY
 * @property float $YLOGGING
 * @property string $app_assignto
 * @property string $app_assignNote
 * @property int $app_safetyapproved
 * @property int $app_safetydeclined
 * @property string $app_safetyexception
 * @property string $app_safetyapprovedby
 * @property string $app_safetycomments
 * @property string $app_safetyapprovedon
 * @property int $app_webID
 * @property string $app_firstname
 * @property string $app_lastname
 * @property string $app_trainingREQ
 * @property int $app_hubspotID
 * @property int $ID
 */
class AppApplication extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'App_Application';

    protected $fillable = ['NAME', 'CITY', 'POSITION', 'PARTNER', 'ADAT', 'TELE', 'TEAM', 'SINGLE', 'EXPYRS', 'CDN', 'USA', 'LONGH', 'MTNS', 'SHORH', 'ROADT', 'ICC', 'REFCHK', 'IVIEW', 'POLICE', 'ABSTRACT', 'STATUS', 'SHORTREASON', 'REASON', 'CBKDAT', 'SUPV', 'PDAT', 'PROV', 'POST', 'ADD1', 'ADD2', 'FAX', 'FAXMAIL', 'APPRECD', 'CLASS1AZ', 'SOURCE', 'SOURCEDRVR', 'ENTERUS', 'ACCID', 'ACCIDM', 'TRIPDUR', 'POSN', 'TORONTO', 'REFCOMPL', 'YMTNS', 'YUSA', 'YCDN', 'YTORONTO', 'birthdate', 'sin', 'drvlic', 'cvor', 'proofcit', 'approveby', 'approvedate', 'signby', 'signdate', 'interviewby', 'interviewdate', 'roadtestdate', 'drugtestdate', 'milesoption', 'conditions', 'orientdate', 'preemploy', 'smoker', 'hotelpo', 'hotelfrom', 'hotelto', 'checkcalldate', 'fleet', 'drivercode', 'oounit', 'ridein', 'reimburse', 'datasheet', 'rdtestsignoffdate', 'rdtestsignoffby', 'rideinordnum', 'interviewnotes', 'arrangements', 'CDRP', 'nonsmoker', 'bonus_sign_active', 'bonus_refer_active', 'bonus_refer_who', 'apptakenby', 'bonus_refer_RRSP', 'bonus_refer_elig', 'callback_reason', 'decline_date', 'decline_by', 'app_sent', 'app_sentby', 'app_format', 'app_emailaddr', 'app_status', 'app_inqrefby', 'app_nosentreason', 'systemcomment', 'app_inqfollowup', 'app_fastcard', 'app_signedpayscale', 'app_orientkit', 'app_other', 'app_otherdesc', 'coe_mindays', 'coe_tractoryard', 'coe_signonbonus', 'coe_payscaletype', 'coe_timeoff', 'coe_missingdoc', 'coe_preference', 'coe_additional', 'coe_nonyc', 'coe_interimss', 'app_terminal', 'app_division', 'app_waiver', 'app_pardon', 'bonus_refer_HR', 'app_lastcommentdate', 'app_orientloc', 'app_driverprogram', 'bonus_sign_elig', 'YCITY', 'YLOGGING', 'app_assignto', 'app_assignNote', 'app_safetyapproved', 'app_safetydeclined', 'app_safetyexception', 'app_safetyapprovedby', 'app_safetycomments', 'app_safetyapprovedon', 'app_webID', 'app_firstname', 'app_lastname', 'app_trainingREQ', 'app_hubspotID', 'ID'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
