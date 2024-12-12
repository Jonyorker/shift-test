<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $created_date
 * @property int $monthly_budget
 * @property string $monthly_date
 * @property string $created_by
 * @property string $updated_by
 * @property string $updated_date
 */
class EquipmentTrackBudgetRentalTrailers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Equipment_Track_Budget_Rental_Trailers';

    protected $fillable = ['id', 'created_date', 'monthly_budget', 'monthly_date', 'created_by', 'updated_by', 'updated_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
