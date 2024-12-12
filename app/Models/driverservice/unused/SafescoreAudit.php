<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $mpp_id
 * @property string $mpp_terminal
 * @property string $mpp_firstname
 * @property string $mpp_lastname
 * @property string $mpp_hiredate
 * @property int $Risk
 * @property string $NewReviewDate
 * @property string $AnnualReviewDate
 * @property string $AccidentDate
 * @property string $HighriskDate
 * @property string $RequestDate
 * @property string $VoradDate
 * @property int $iNetPerformanceFlag
 */
class SafescoreAudit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Safescore_Audit';

    protected $fillable = ['mpp_id', 'mpp_terminal', 'mpp_firstname', 'mpp_lastname', 'mpp_hiredate', 'Risk', 'NewReviewDate', 'AnnualReviewDate', 'AccidentDate', 'HighriskDate', 'RequestDate', 'VoradDate', 'iNetPerformanceFlag'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
