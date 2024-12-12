<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $opt_in
 */
class TeamListOptInNotifications extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Team_List_Opt_In_Notifications';

    protected $fillable = ['id', 'emp_id', 'opt_in'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
