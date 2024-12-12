<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $trc_id
 * @property string $trc_refnum
 * @property int $ord_hdrnumber
 * @property string $trc_type
 * @property string $trc_email
 * @property string $user_id
 * @property string $stp_numbers
 * @property string $date_added
 * @property string $hash_key
 */
class BisonWebTraceAction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BisonWeb_TraceAction';

    protected $fillable = ['trc_id', 'trc_refnum', 'ord_hdrnumber', 'trc_type', 'trc_email', 'user_id', 'stp_numbers', 'date_added', 'hash_key'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
