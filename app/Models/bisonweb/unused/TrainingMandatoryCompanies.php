<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $slug
 * @property int $bison_training_company_id
 */
class TrainingMandatoryCompanies extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Training_Mandatory_Companies';

    protected $fillable = ['id', 'slug', 'bison_training_company_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
