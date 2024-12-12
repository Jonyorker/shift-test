<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $form_id
 * @property int $element_id
 * @property string $start_date
 * @property string $end_date
 */
class FormElements extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Form_Elements';

    protected $fillable = ['id', 'form_id', 'element_id', 'start_date', 'end_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
