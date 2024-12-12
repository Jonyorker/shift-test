<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $labeltype
 * @property string $abbr
 * @property string $description
 * @property string $revtype1
 * @property int $active
 * @property string $extra1
 * @property string $extra2
 * @property string $extra3
 */
class LgstLabelfile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Lgst_Labelfile';

    protected $fillable = ['id', 'labeltype', 'abbr', 'description', 'revtype1', 'active', 'extra1', 'extra2', 'extra3'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
