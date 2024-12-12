<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $pto_id
 * @property mixed $timestamp
 * @property string $pto_altid
 * @property string $pto_fname
 * @property string $pto_mname
 * @property string $pto_lname
 * @property string $pto_ssn
 * @property string $pto_address1
 * @property string $pto_address2
 * @property int $pto_city
 * @property string $pto_zip
 * @property string $pto_phone1
 * @property string $pto_phone2
 * @property string $pto_phone3
 * @property string $pto_currency
 * @property string $pto_type1
 * @property string $pto_type2
 * @property string $pto_type3
 * @property string $pto_type4
 * @property string $pto_company
 * @property string $pto_division
 * @property string $pto_terminal
 * @property string $pto_status
 * @property string $pto_lastfirst
 * @property string $pto_fleet
 * @property string $pto_misc1
 * @property string $pto_misc2
 * @property string $pto_misc3
 * @property string $pto_misc4
 * @property string $pto_updatedby
 * @property string $pto_updateddate
 * @property int $pto_yrtodategross
 * @property string $pto_socsecfedtax
 * @property string $pto_dirdeposit
 * @property string $pto_fleettrc
 * @property string $pto_startdate
 * @property string $pto_terminatedate
 * @property string $pto_createdate
 * @property string $pto_companyname
 * @property string $pto_country
 * @property string $pto_gp_class
 * @property string $pto_factorid
 * @property int $pto_1099type
 * @property float $pto_max_advance_pertrip
 * @property int $pto_max_advance_perday
 * @property int $rowsec_rsrv_id
 * @property string $pto_asset_maintenance_type1
 * @property string $pto_asset_maintenance_type2
 * @property string $pto_asset_maintenance_type3
 * @property int $pto_make_billto
 * @property string $brn_id
 * @property bool $pto_stlByPayTo
 * @property int $PayScheduleId
 * @property string $pto_arrears_start
 * @property string $INS_TIMESTAMP
 */
class Payto extends Model
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
    protected $table = 'Payto';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'pto_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    protected $fillable = ['timestamp', 'pto_altid', 'pto_fname', 'pto_mname', 'pto_lname', 'pto_ssn', 'pto_address1', 'pto_address2', 'pto_city', 'pto_zip', 'pto_phone1', 'pto_phone2', 'pto_phone3', 'pto_currency', 'pto_type1', 'pto_type2', 'pto_type3', 'pto_type4', 'pto_company', 'pto_division', 'pto_terminal', 'pto_status', 'pto_lastfirst', 'pto_fleet', 'pto_misc1', 'pto_misc2', 'pto_misc3', 'pto_misc4', 'pto_updatedby', 'pto_updateddate', 'pto_yrtodategross', 'pto_socsecfedtax', 'pto_dirdeposit', 'pto_fleettrc', 'pto_startdate', 'pto_terminatedate', 'pto_createdate', 'pto_companyname', 'pto_country', 'pto_gp_class', 'pto_factorid', 'pto_1099type', 'pto_max_advance_pertrip', 'pto_max_advance_perday', 'rowsec_rsrv_id', 'pto_asset_maintenance_type1', 'pto_asset_maintenance_type2', 'pto_asset_maintenance_type3', 'pto_make_billto', 'brn_id', 'pto_stlByPayTo', 'PayScheduleId', 'pto_arrears_start', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
