<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $version
 * @property int $build
 * @property string $release_date
 * @property string $expiry_date
 * @property string $release_notes
 */
class Herd2goVersions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Herd2go_Versions';

    protected $fillable = ['id', 'version', 'build', 'release_date', 'expiry_date', 'release_notes'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
