<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $car_id
 * @property string $car_ownercsr
 * @property string $car_terms
 * @property string $car_freq
 * @property string $car_services
 * @property string $car_validation
 * @property string $car_validationdt
 * @property string $car_processflow
 * @property string $car_comments
 * @property int $car_cartrate
 * @property int $car_cartfsc
 * @property string $car_lastedit
 * @property string $car_lasteditby
 * @property string $car_validationby
 * @property string $car_parent
 */
class BisonCarrierextra extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Carrierextra';

    protected $fillable = ['car_id', 'car_ownercsr', 'car_terms', 'car_freq', 'car_services', 'car_validation', 'car_validationdt', 'car_processflow', 'car_comments', 'car_cartrate', 'car_cartfsc', 'car_lastedit', 'car_lasteditby', 'car_validationby', 'car_parent'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
