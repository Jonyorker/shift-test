<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $load_in_bond_id
 * @property int $ord_hdrnumber
 * @property int $mov_number
 * @property string $trl_id
 * @property string $ord_billto
 * @property string $pars
 * @property string $location
 * @property string $reason
 * @property string $comments
 * @property int $bond_status_id
 * @property string $created_date
 * @property string $created_by
 */
class CustomsBrokerLoadInBondHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Customs_Broker_Load_In_Bond_History';

    protected $fillable = ['id', 'load_in_bond_id', 'ord_hdrnumber', 'mov_number', 'trl_id', 'ord_billto', 'pars', 'location', 'reason', 'comments', 'bond_status_id', 'created_date', 'created_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
