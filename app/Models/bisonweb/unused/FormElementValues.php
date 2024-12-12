<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $form_index_id
 * @property int $form_element_id
 * @property string $value
 * @property string $modified_date
 * @property string $modified_by
 */
class FormElementValues extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Form_Element_Values';

    protected $fillable = ['id', 'form_index_id', 'form_element_id', 'value', 'modified_date', 'modified_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
