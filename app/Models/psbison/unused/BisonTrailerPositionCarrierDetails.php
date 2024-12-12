<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $car_id
 * @property string $created_date
 * @property string $mtsn
 * @property string $asset_id
 * @property string $asset_type
 * @property float $latitude
 * @property float $longitude
 * @property float $speed_mph
 * @property float $speed_kph
 * @property string $heading
 * @property string $heading_in_degrees
 * @property float $journey_distance_mi
 * @property float $journey_distance_km
 * @property string $event_time
 * @property string $event_time_cst
 * @property string $geo_name
 * @property string $city
 * @property string $state
 * @property string $country
 * @property float $distance_from_city_mi
 * @property float $distance_from_city_km
 * @property string $direction_from_city
 * @property string $postal_code
 * @property float $idle_duration_days
 * @property string $status
 * @property string $feed_source
 * @property string $bison_geo_description
 * @property string $bison_geofence_cmpid
 * @property string $bison_trlid
 * @property int $is_device_communicating
 */
class BisonTrailerPositionCarrierDetails extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_TrailerPosition_Carrier_Details';

    protected $fillable = ['car_id', 'created_date', 'mtsn', 'asset_id', 'asset_type', 'latitude', 'longitude', 'speed_mph', 'speed_kph', 'heading', 'heading_in_degrees', 'journey_distance_mi', 'journey_distance_km', 'event_time', 'event_time_cst', 'geo_name', 'city', 'state', 'country', 'distance_from_city_mi', 'distance_from_city_km', 'direction_from_city', 'postal_code', 'idle_duration_days', 'status', 'feed_source', 'bison_geo_description', 'bison_geofence_cmpid', 'bison_trlid', 'is_device_communicating'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
