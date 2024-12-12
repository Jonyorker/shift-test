<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $ticket_id
 * @property string $body
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property string $is_public
 * @property string $attachment_location
 * @property string $attachment_content_type
 * @property string $attachment_name
 * @property string $is_purchase
 * @property string $is_labor
 * @property string $is_inventory
 * @property int $collaborator_id
 * @property int $remote_id
 * @property string $comment_type
 * @property int $attachment_size
 */
class Comments extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Comments';

    protected $fillable = ['id', 'ticket_id', 'body', 'created_at', 'updated_at', 'created_by', 'is_public', 'attachment_location', 'attachment_content_type', 'attachment_name', 'is_purchase', 'is_labor', 'is_inventory', 'collaborator_id', 'remote_id', 'comment_type', 'attachment_size'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
