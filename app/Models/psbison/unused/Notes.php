<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $not_number
 * @property string $not_text
 * @property string $not_type
 * @property string $not_urgent
 * @property string $not_senton
 * @property string $not_sentby
 * @property string $not_expires
 * @property int $not_forwardedfrom
 * @property mixed $timestamp
 * @property string $ntb_table
 * @property string $nre_tablekey
 * @property int $not_sequence
 * @property string $last_updatedby
 * @property string $last_updatedatetime
 * @property string $autonote
 * @property string $not_text_large
 * @property string $not_viewlevel
 * @property string $not_tmsend
 * @property string $ntb_table_copied_from
 * @property string $nre_tablekey_copied_from
 * @property int $not_number_copied_from
 * @property bool $not_copy_to_order
 * @property bool $not_profile_only
 */
class Notes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Notes';

    protected $fillable = ['not_number', 'not_text', 'not_type', 'not_urgent', 'not_senton', 'not_sentby', 'not_expires', 'not_forwardedfrom', 'timestamp', 'ntb_table', 'nre_tablekey', 'not_sequence', 'last_updatedby', 'last_updatedatetime', 'autonote', 'not_text_large', 'not_viewlevel', 'not_tmsend', 'ntb_table_copied_from', 'nre_tablekey_copied_from', 'not_number_copied_from', 'not_copy_to_order', 'not_profile_only'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
