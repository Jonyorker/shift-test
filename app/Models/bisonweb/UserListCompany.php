<?php

namespace App\Models\bisonweb;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_list_id
 * @property string $company_id
 * @property string $status
 * @property string $hired_date
 * @property string $seniority_date
 * @property string $termination_date
 * @property string $created_date
 * @property string $updated_date
 */
class UserListCompany extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_date';

    const UPDATED_AT = 'updated_date';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_List_Company';

    protected $fillable = ['id', 'user_list_id', 'company_id', 'status', 'hired_date', 'seniority_date', 'termination_date', 'created_date', 'updated_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';

    // Relationships

    /**
     * @return BelongsTo<UserList, UserListCompany>
     */
    public function userList(): BelongsTo
    {
        return $this->belongsTo(UserList::class, 'user_list_id', 'id');
    }
}
