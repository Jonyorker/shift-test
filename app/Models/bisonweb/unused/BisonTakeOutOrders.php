<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $employee_id
 * @property string $terminal
 * @property int $bison_take_out_menu_id
 * @property int $quantity
 * @property string $order_date
 * @property string $delivery_date
 */
class BisonTakeOutOrders extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Take_Out_Orders';

    protected $fillable = ['employee_id', 'terminal', 'bison_take_out_menu_id', 'quantity', 'order_date', 'delivery_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
