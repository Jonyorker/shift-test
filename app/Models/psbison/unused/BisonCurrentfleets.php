<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $fleet
 * @property int $autosend
 * @property int $citydwell
 * @property string $flt_type
 * @property int $cityops
 * @property string $region
 * @property string $division
 * @property int $refnums
 * @property int $advWarnViewer
 * @property int $retired
 * @property string $fleetregion
 * @property int $citypay
 * @property int $ord_notes
 */
class BisonCurrentfleets extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Currentfleets';

    protected $fillable = ['fleet', 'autosend', 'citydwell', 'flt_type', 'cityops', 'region', 'division', 'refnums', 'advWarnViewer', 'retired', 'fleetregion', 'citypay', 'ord_notes'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
