<?php

namespace App\Models\psbison;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cty_code
 * @property string $cty_name
 * @property string $cty_state
 * @property string $cty_zip
 * @property string $cty_areacode
 * @property int $cty_splc
 * @property string $cty_county
 * @property float $cty_latitude
 * @property float $cty_longitude
 * @property string $cty_region1
 * @property string $cty_region2
 * @property string $cty_region3
 * @property string $cty_region4
 * @property string $cty_nmstct
 * @property mixed $timestamp
 * @property int $cty_comm_zone
 * @property string $cty_country
 * @property string $cty_updatedby
 * @property string $cty_updateddate
 * @property string $cty_createdate
 * @property string $rand_city
 * @property string $rand_state
 * @property string $rand_county
 * @property string $alk_city
 * @property string $alk_state
 * @property string $alk_county
 * @property int $cty_fuelcreate
 * @property int $bison_latitude
 * @property int $bison_longitude
 * @property string $bison_timezone
 * @property string $county_name
 * @property string $rand_county_name
 * @property string $alk_county_name
 * @property string $rand_verified
 * @property string $rand_verified_date
 * @property string $alk_verified
 * @property string $alk_verified_date
 * @property string $bison_USBorderCode
 * @property float $cty_GMTDelta
 * @property string $cty_DSTApplies
 * @property string $alk_region
 * @property int $cty_TZMins
 * @property int $cty_countyfips
 * @property int $cty_statefips
 * @property int $cty_msa
 * @property string $cty_CityShort
 * @property string $cty_GeoCodeRequested
 * @property int $cty_ALK_FileValidatedYR
 * @property string $cty_splc_char
 * @property string $citypoint
 * @property string $INS_TIMESTAMP
 */
class City extends Model
{
    use HasFactory;

    const CREATED_AT = 'INS_TIMESTAMP';

    const UPDATED_AT = null;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'City';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'cty_code';

    protected $fillable = ['cty_name', 'cty_state', 'cty_zip', 'cty_areacode', 'cty_splc', 'cty_county', 'cty_latitude', 'cty_longitude', 'cty_region1', 'cty_region2', 'cty_region3', 'cty_region4', 'cty_nmstct', 'timestamp', 'cty_comm_zone', 'cty_country', 'cty_updatedby', 'cty_updateddate', 'cty_createdate', 'rand_city', 'rand_state', 'rand_county', 'alk_city', 'alk_state', 'alk_county', 'cty_fuelcreate', 'bison_latitude', 'bison_longitude', 'bison_timezone', 'county_name', 'rand_county_name', 'alk_county_name', 'rand_verified', 'rand_verified_date', 'alk_verified', 'alk_verified_date', 'bison_USBorderCode', 'cty_GMTDelta', 'cty_DSTApplies', 'alk_region', 'cty_TZMins', 'cty_countyfips', 'cty_statefips', 'cty_msa', 'cty_CityShort', 'cty_GeoCodeRequested', 'cty_ALK_FileValidatedYR', 'cty_splc_char', 'citypoint', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
