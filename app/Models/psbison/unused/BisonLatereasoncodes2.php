<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $owner
 * @property string $fault
 * @property string $reasoncode
 * @property string $description
 * @property int $reasonorder
 * @property int $active
 * @property string $edicode
 * @property string $itoolscategory
 * @property int $hidden
 * @property int $fleet
 * @property int $driver
 * @property int $carrier
 * @property int $equipment
 * @property string $email
 * @property int $ablregion
 * @property string $friendlydesc
 */
class BisonLatereasoncodes2 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Latereasoncodes_2';

    protected $fillable = ['owner', 'fault', 'reasoncode', 'description', 'reasonorder', 'active', 'edicode', 'itoolscategory', 'hidden', 'fleet', 'driver', 'carrier', 'equipment', 'email', 'ablregion', 'friendlydesc'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
