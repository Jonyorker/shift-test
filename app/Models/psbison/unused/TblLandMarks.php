<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $SN
 * @property int $LatGrid
 * @property int $LongGrid
 * @property int $SPLC
 * @property string $PopulationCode
 * @property string $EnglishCityName
 * @property string $State
 * @property float $LatDegrees
 * @property float $LongDegrees
 * @property mixed $ts
 * @property string $landmarkpoint
 */
class TblLandMarks extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TblLandMarks';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'SN';

    protected $fillable = ['LatGrid', 'LongGrid', 'SPLC', 'PopulationCode', 'EnglishCityName', 'State', 'LatDegrees', 'LongDegrees', 'ts', 'landmarkpoint'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
