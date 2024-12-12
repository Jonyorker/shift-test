<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $year_created
 * @property string $award
 * @property string $note
 */
class DinnerDanceAwards extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Dinner_Dance_Awards';

    protected $fillable = ['id', 'emp_id', 'year_created', 'award', 'note'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
