<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $form_id
 * @property int $submission_id
 * @property int $field_id
 * @property string $label
 * @property string $type
 * @property string $submission_date
 * @property string $value
 */
class FormstackSubmissions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Formstack_Submissions';

    protected $fillable = ['id', 'form_id', 'submission_id', 'field_id', 'label', 'type', 'submission_date', 'value'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
