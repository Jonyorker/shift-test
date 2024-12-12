<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $typ
 * @property string $dt
 * @property int $tlrev
 * @property int $adfrev
 * @property int $ltlrev
 * @property int $ablrev
 * @property int $intmrev
 * @property int $totalrev
 * @property int $budget_tl
 * @property int $budget_adf
 * @property int $budget_ltl
 * @property int $budget_abl
 * @property int $budget_int
 * @property int $miles_tl
 * @property int $miles_adf
 * @property int $miles_ltl
 * @property int $miles_abl
 * @property int $miles_int
 */
class BisonkpiFactsRevenue extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonkpi_Facts_Revenue';

    protected $fillable = ['id', 'typ', 'dt', 'tlrev', 'adfrev', 'ltlrev', 'ablrev', 'intmrev', 'totalrev', 'budget_tl', 'budget_adf', 'budget_ltl', 'budget_abl', 'budget_int', 'miles_tl', 'miles_adf', 'miles_ltl', 'miles_abl', 'miles_int'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
