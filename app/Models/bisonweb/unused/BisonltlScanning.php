<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $ltlx_order
 * @property int $scanned_skids
 */
class BisonltlScanning extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonltl_Scanning';

    protected $fillable = ['id', 'ltlx_order', 'scanned_skids'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
