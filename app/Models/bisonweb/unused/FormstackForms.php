<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $form_id
 * @property string $name
 * @property int $submissions
 * @property string $updated_date
 * @property string $created_date
 * @property int $is_active
 * @property string $last_submission_date
 * @property int $encrypted
 */
class FormstackForms extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Formstack_Forms';

    protected $fillable = ['id', 'form_id', 'name', 'submissions', 'updated_date', 'created_date', 'is_active', 'last_submission_date', 'encrypted'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
