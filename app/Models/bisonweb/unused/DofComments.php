<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $comments
 * @property string $email
 * @property string $emp_id
 * @property string $stp_number
 * @property string $received_date
 * @property string $exported_date
 */
class DofComments extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Dof_Comments';

    protected $fillable = ['id', 'comments', 'email', 'emp_id', 'stp_number', 'received_date', 'exported_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
