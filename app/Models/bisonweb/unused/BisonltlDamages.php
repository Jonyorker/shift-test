<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $mov_number
 * @property int $ltlx_order
 * @property string $uuid
 * @property string $date_created
 * @property string $created_by
 * @property string $notes
 */
class BisonltlDamages extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonltl_Damages';

    protected $fillable = ['id', 'mov_number', 'ltlx_order', 'uuid', 'date_created', 'created_by', 'notes'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
