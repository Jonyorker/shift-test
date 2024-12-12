<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $doc_control_id
 * @property string $title
 * @property string $author
 * @property string $published_date
 * @property string $url
 * @property int $req_action
 * @property int $is_lcv_update
 * @property int $is_drg_update
 * @property int $tab_number
 * @property string $recipient
 * @property string $emp_id
 * @property string $created_date
 * @property string $modified_date
 * @property int $is_active
 * @property string $memo_id
 * @property string $email_recipient
 * @property int $is_memo_email_sent
 */
class IntraDocumentDriveMemo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Intra_Document_Drive_Memo';

    protected $fillable = ['id', 'doc_control_id', 'title', 'author', 'published_date', 'url', 'req_action', 'is_lcv_update', 'is_drg_update', 'tab_number', 'recipient', 'emp_id', 'created_date', 'modified_date', 'is_active', 'memo_id', 'email_recipient', 'is_memo_email_sent'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
