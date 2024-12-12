<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_date
 * @property int $lgh_number
 * @property int $locid
 * @property string $fueltype
 * @property string $name
 * @property string $city
 * @property string $prov
 * @property float $lat
 * @property float $lng
 * @property float $along
 * @property float $dist
 * @property float $price
 * @property float $exch
 * @property float $ifta
 * @property float $retail
 * @property float $rackprice
 * @property float $federaltax
 * @property float $freightcost
 * @property float $statetax
 * @property float $otherfees
 * @property int $discounted
 * @property string $startdate
 * @property string $addr
 * @property string $phone
 * @property string $fax
 * @property int $efsid
 * @property int $istp
 * @property int $isactive
 * @property int $scale
 * @property int $bulkdef
 * @property string $facilities
 * @property int $parking
 * @property int $restaurant
 * @property int $showers
 * @property string $note
 * @property int $optimal
 * @property string $lgh_driver1
 * @property string $lgh_carrier
 * @property string $country
 * @property int $sort_by
 * @property int $rebate
 * @property bool $included
 * @property int $carrier_fuel_plan_id
 * @property int $carrier_fuel_plan_route_id
 * @property int $lgh_miles
 * @property float $price_cad
 * @property float $price_usd
 */
class FuelStations extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Fuel_Stations';

    protected $fillable = ['id', 'created_date', 'lgh_number', 'locid', 'fueltype', 'name', 'city', 'prov', 'lat', 'lng', 'along', 'dist', 'price', 'exch', 'ifta', 'retail', 'rackprice', 'federaltax', 'freightcost', 'statetax', 'otherfees', 'discounted', 'startdate', 'addr', 'phone', 'fax', 'efsid', 'istp', 'isactive', 'scale', 'bulkdef', 'facilities', 'parking', 'restaurant', 'showers', 'note', 'optimal', 'lgh_driver1', 'lgh_carrier', 'country', 'sort_by', 'rebate', 'included', 'carrier_fuel_plan_id', 'carrier_fuel_plan_route_id', 'lgh_miles', 'price_cad', 'price_usd'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
