<?php

namespace App\Models\psbison;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ref_id
 * @property int $ref_tablekey
 * @property string $ref_type
 * @property string $ref_number
 * @property string $ref_typedesc
 * @property int $ref_sequence
 * @property int $ord_hdrnumber
 * @property mixed $timestamp
 * @property string $ref_table
 * @property string $ref_sid
 * @property string $ref_pickup
 * @property string $last_updateby
 * @property string $last_updatedate
 * @property string $AutoRefNumberOrigin
 * @property string $INS_TIMESTAMP
 */
class ReferenceNumber extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ReferenceNumber';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ref_id';

    protected $fillable = ['ref_tablekey', 'ref_type', 'ref_number', 'ref_typedesc', 'ref_sequence', 'ord_hdrnumber', 'timestamp', 'ref_table', 'ref_sid', 'ref_pickup', 'last_updateby', 'last_updatedate', 'AutoRefNumberOrigin', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
