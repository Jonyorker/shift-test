<?php

namespace App\Models\bisonweb;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $label
 * @property string $code
 * @property int $is_active
 */
class UserListContactType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Contact_Type';

    protected $fillable = ['id', 'label', 'code', 'is_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';

    // Relationship

    /**
     * @return BelongsTo<UserListContact, UserListContactType>
     */
    public function userListContact(): BelongsTo
    {
        return $this->belongsTo(UserListContact::class, 'id', 'user_list_contact_type_id');
    }
}
