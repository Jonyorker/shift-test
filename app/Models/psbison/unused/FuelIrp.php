<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $trc_number
 * @property string $state
 * @property float $distance
 * @property string $distance_type
 * @property float $pct_total
 * @property string $trc_company
 * @property string $dt_start
 * @property string $dt_end
 * @property float $fuel_litres
 * @property float $toll_km
 * @property float $litres_burned
 * @property float $tax_amount
 * @property float $KMLitre_rate
 * @property string $revtype1
 * @property float $tax_rate
 */
class FuelIrp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Fuel_Irp';

    protected $fillable = ['id', 'trc_number', 'state', 'distance', 'distance_type', 'pct_total', 'trc_company', 'dt_start', 'dt_end', 'fuel_litres', 'toll_km', 'litres_burned', 'tax_amount', 'KMLitre_rate', 'revtype1', 'tax_rate'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
