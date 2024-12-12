<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $year
 * @property int $week
 * @property string $weekstart
 * @property string $weekend
 * @property int $trlbison
 * @property int $trlrental
 * @property int $trloneway
 * @property int $trltotal
 * @property int $trlintm
 * @property int $revenue
 * @property int $revenuegp
 * @property int $revenueintm
 * @property int $trlday
 * @property int $abltrips
 * @property int $abltrldays
 * @property int $ablloaddays
 * @property int $abltrldaysbison
 * @property int $revtrl
 * @property int $revtrlrolling
 * @property int $revtarget
 */
class Bison4dxSummary extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison4dx_Summary';

    protected $fillable = ['year', 'week', 'weekstart', 'weekend', 'trlbison', 'trlrental', 'trloneway', 'trltotal', 'trlintm', 'revenue', 'revenuegp', 'revenueintm', 'trlday', 'abltrips', 'abltrldays', 'ablloaddays', 'abltrldaysbison', 'revtrl', 'revtrlrolling', 'revtarget'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
