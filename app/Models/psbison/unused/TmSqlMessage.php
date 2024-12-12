<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $msg_ID
 * @property string $msg_date
 * @property int $msg_FormID
 * @property string $msg_To
 * @property int $msg_ToType
 * @property string $msg_FilterData
 * @property int $msg_FilterDataDupWaitSeconds
 * @property string $msg_From
 * @property int $msg_FromType
 * @property string $msg_Subject
 * @property int $TranInstance
 */
class TmSqlMessage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TmSqlMessage';

    protected $fillable = ['msg_ID', 'msg_date', 'msg_FormID', 'msg_To', 'msg_ToType', 'msg_FilterData', 'msg_FilterDataDupWaitSeconds', 'msg_From', 'msg_FromType', 'msg_Subject', 'TranInstance'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
