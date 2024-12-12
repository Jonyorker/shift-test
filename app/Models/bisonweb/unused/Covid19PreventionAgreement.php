<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $Time
 * @property string $EmployeeID
 * @property string $Name (First)
 * @property string $Name (Last)
 * @property string $Signature
 * @property string $Browser
 * @property string $IP Address
 * @property string $Unique ID
 * @property string $Location
 */
class Covid19PreventionAgreement extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Covid19PreventionAgreement';

    protected $fillable = ['Time', 'EmployeeID', 'Name (First)', 'Name (Last)', 'Signature', 'Browser', 'IP Address', 'Unique ID', 'Location'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
