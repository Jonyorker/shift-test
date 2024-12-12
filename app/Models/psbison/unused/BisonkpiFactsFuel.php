<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $dt
 * @property int $quan
 * @property int $amount
 * @property int $quanoo
 * @property int $amountoo
 * @property int $quancmp
 * @property int $amountcmp
 * @property int $fsc
 * @property int $ldmiles
 * @property int $mtmiles
 * @property int $tpmiles
 * @property int $carmiles
 * @property int $revenue
 */
class BisonkpiFactsFuel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonkpi_Facts_Fuel';

    protected $fillable = ['dt', 'quan', 'amount', 'quanoo', 'amountoo', 'quancmp', 'amountcmp', 'fsc', 'ldmiles', 'mtmiles', 'tpmiles', 'carmiles', 'revenue'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
