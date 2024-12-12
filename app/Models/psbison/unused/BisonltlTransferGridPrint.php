<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $order_number
 * @property int $leg_number
 * @property int $po_number
 * @property string $printed_date
 * @property string $printed_by
 */
class BisonltlTransferGridPrint extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonltl_Transfer_Grid_Print';

    protected $fillable = ['order_number', 'leg_number', 'po_number', 'printed_date', 'printed_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
