<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $form_id
 * @property int $index_key
 * @property string $emp_id
 * @property string $created_date
 */
class FormIndex extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Form_Index';

    protected $fillable = ['id', 'form_id', 'index_key', 'emp_id', 'created_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
