<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $typ
 * @property string $lgh_startdate
 * @property int $ldmiles
 * @property int $mtmiles
 * @property int $carriermiles
 * @property int $reefermiles
 * @property int $turnpikemiles
 * @property float $revenue
 * @property int $numtrips
 * @property int $numorders
 * @property int $numtrucks
 * @property int $numtrailers
 * @property int $numunassigned
 * @property int $numactivecomp
 * @property int $numactiveoo
 * @property int $budget_miles
 * @property int $budget_trucks
 * @property int $budget_rpm
 * @property float $ablrevenue
 * @property int $loads_bison
 * @property int $loads_abl
 * @property float $reeftrlrev
 * @property int $reeftrlld
 * @property int $reeftrlmt
 * @property float $reefrev
 * @property int $reefld
 * @property int $reefmt
 * @property int $reefavgtriplen
 * @property float $reeflogirev
 * @property int $reeftrlcount
 * @property int $reeftripcount
 * @property int $compmiles
 * @property float $fuelcomplitres
 * @property float $fscrev
 * @property float $fuelsubsidy
 * @property float $fuelcompcost
 * @property int $delvSCM
 * @property int $delvABL
 * @property int $delvLUL
 * @property int $delvDRL
 * @property int $podreqd
 * @property int $pod0to15
 * @property int $pod16to30
 * @property int $pod31plus
 * @property int $pod0to15_cnt
 * @property int $pod16to30_cnt
 * @property int $pod31plus_cnt
 * @property int $legmiles
 * @property int $reef_drvmiles
 * @property int $reef_drvtrlmiles
 * @property int $acct_rev
 * @property int $acct_miles
 * @property int $acct_miles_oo
 * @property int $hwyootrucks
 * @property int $hwycotrucks
 * @property int $pikeootrucks
 * @property int $pikecotrucks
 * @property int $intraootrucks
 * @property int $intracotrucks
 * @property int $citytrucks
 * @property int $x01ootrucks
 * @property int $x01cotrucks
 * @property int $r1ootrucks
 * @property int $r1cotrucks
 * @property int $r2ootrucks
 * @property int $r2cotrucks
 * @property int $c01ootrucks
 * @property int $c01cotrucks
 * @property int $c02ootrucks
 * @property int $c02cotrucks
 * @property int $c03ootrucks
 * @property int $c03cotrucks
 * @property int $c04ootrucks
 * @property int $c04cotrucks
 * @property int $c05ootrucks
 * @property int $c05cotrucks
 * @property int $c06ootrucks
 * @property int $c06cotrucks
 * @property int $c07ootrucks
 * @property int $c07cotrucks
 * @property int $w01ootrucks
 * @property int $w01cotrucks
 * @property int $w02cotrucks
 * @property int $w02ootrucks
 * @property int $w03ootrucks
 * @property int $w03cotrucks
 * @property int $e01ootrucks
 * @property int $e01cotrucks
 * @property int $e02ootrucks
 * @property int $e02cotrucks
 * @property int $e03ootrucks
 * @property int $e03cotrucks
 * @property int $z01ootrucks
 * @property int $z01cotrucks
 * @property int $acct_miles_hwyoo
 * @property int $acct_miles_hwyco
 * @property int $acct_miles_pikeoo
 * @property int $acct_miles_pikeco
 * @property int $acct_miles_intraoo
 * @property int $acct_miles_intraco
 * @property int $acct_miles_city
 * @property int $budget_intermodal
 * @property int $budget_logistics
 * @property int $intermodalmiles
 * @property float $intermodalrev
 * @property int $estunrated
 * @property int $estunratedabl
 * @property float $reefrevheat
 * @property int $reefldheat
 * @property int $reefmtheat
 * @property float $reefrevdry
 * @property int $reeflddry
 * @property int $reefmtdry
 * @property int $legmiles_lcv
 * @property int $legmiles_team
 * @property int $budget_lcvmiles
 * @property int $warr_zero
 * @property int $warr_full
 * @property int $warr_extv
 * @property int $warr_extf
 * @property int $warr_trccount
 * @property int $acct_miles_cityoo
 * @property int $acct_miles_cityco
 * @property int $budget_miles_cityco
 * @property int $budget_miles_cityoo
 * @property int $budget_trucks_cityco
 * @property int $budget_trucks_cityoo
 */
class BisonkpiFacts extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonkpi_Facts';

    protected $fillable = ['id', 'typ', 'lgh_startdate', 'ldmiles', 'mtmiles', 'carriermiles', 'reefermiles', 'turnpikemiles', 'revenue', 'numtrips', 'numorders', 'numtrucks', 'numtrailers', 'numunassigned', 'numactivecomp', 'numactiveoo', 'budget_miles', 'budget_trucks', 'budget_rpm', 'ablrevenue', 'loads_bison', 'loads_abl', 'reeftrlrev', 'reeftrlld', 'reeftrlmt', 'reefrev', 'reefld', 'reefmt', 'reefavgtriplen', 'reeflogirev', 'reeftrlcount', 'reeftripcount', 'compmiles', 'fuelcomplitres', 'fscrev', 'fuelsubsidy', 'fuelcompcost', 'delvSCM', 'delvABL', 'delvLUL', 'delvDRL', 'podreqd', 'pod0to15', 'pod16to30', 'pod31plus', 'pod0to15_cnt', 'pod16to30_cnt', 'pod31plus_cnt', 'legmiles', 'reef_drvmiles', 'reef_drvtrlmiles', 'acct_rev', 'acct_miles', 'acct_miles_oo', 'hwyootrucks', 'hwycotrucks', 'pikeootrucks', 'pikecotrucks', 'intraootrucks', 'intracotrucks', 'citytrucks', 'x01ootrucks', 'x01cotrucks', 'r1ootrucks', 'r1cotrucks', 'r2ootrucks', 'r2cotrucks', 'c01ootrucks', 'c01cotrucks', 'c02ootrucks', 'c02cotrucks', 'c03ootrucks', 'c03cotrucks', 'c04ootrucks', 'c04cotrucks', 'c05ootrucks', 'c05cotrucks', 'c06ootrucks', 'c06cotrucks', 'c07ootrucks', 'c07cotrucks', 'w01ootrucks', 'w01cotrucks', 'w02cotrucks', 'w02ootrucks', 'w03ootrucks', 'w03cotrucks', 'e01ootrucks', 'e01cotrucks', 'e02ootrucks', 'e02cotrucks', 'e03ootrucks', 'e03cotrucks', 'z01ootrucks', 'z01cotrucks', 'acct_miles_hwyoo', 'acct_miles_hwyco', 'acct_miles_pikeoo', 'acct_miles_pikeco', 'acct_miles_intraoo', 'acct_miles_intraco', 'acct_miles_city', 'budget_intermodal', 'budget_logistics', 'intermodalmiles', 'intermodalrev', 'estunrated', 'estunratedabl', 'reefrevheat', 'reefldheat', 'reefmtheat', 'reefrevdry', 'reeflddry', 'reefmtdry', 'legmiles_lcv', 'legmiles_team', 'budget_lcvmiles', 'warr_zero', 'warr_full', 'warr_extv', 'warr_extf', 'warr_trccount', 'acct_miles_cityoo', 'acct_miles_cityco', 'budget_miles_cityco', 'budget_miles_cityoo', 'budget_trucks_cityco', 'budget_trucks_cityoo'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
