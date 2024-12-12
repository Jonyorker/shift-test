<?php

namespace App\Models\bison;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $dnum
 * @property string $fueltype
 * @property string $cardno
 * @property string $pin
 * @property string $oldcard
 * @property int $blocked
 * @property string $blockdate
 * @property int $active
 * @property string $startdate
 * @property string $enddate
 * @property string $comment
 * @property string $expirydate
 * @property string $cardtype
 * @property string $carrier
 * @property string $altid
 * @property string $revtype1
 */
class FuelDriverCards extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fuel_drivercards';

    protected $fillable = ['id', 'dnum', 'fueltype', 'cardno', 'pin', 'oldcard', 'blocked', 'blockdate', 'active', 'startdate', 'enddate', 'comment', 'expirydate', 'cardtype', 'carrier', 'altid', 'revtype1'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bison';

    // Methods
    //    public function getNewEmployees()
    //    {
    //
    //        return $this
    //            ->select($this->expression('DISTINCT(' . tbl_FuelDrivercards::DNUM . ')'))
    //            ->Where("cardtype" => 'PERSONAL')
    //            ->andWhere([tbl_FuelDriverCards::ACTIVE => 1])
    //            ->andWhere([tbl_FuelDriverCards::FUELTYPE => 'HC'])
    //            ->andWhere([
    //                '>=' , tbl_FuelDrivercards::STARTDATE , $this->expression('CONVERT(DATE, GETDATE())'),
    //            ])
    //
    //            ->noLock()
    //            ->all();
    //
    //    }
}
