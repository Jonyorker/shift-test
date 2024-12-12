<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $form_name
 * @property string $form_description
 */
class Forms extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Forms';

    protected $fillable = ['id', 'form_name', 'form_description'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
