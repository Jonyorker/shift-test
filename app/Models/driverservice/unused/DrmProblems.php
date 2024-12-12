<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $iss_problem
 * @property string $iss_description
 * @property string $iss_class
 * @property string $iss_followup
 */
class DrmProblems extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Drm_Problems';

    protected $fillable = ['iss_problem', 'iss_description', 'iss_class', 'iss_followup'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
