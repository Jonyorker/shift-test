<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $yard_code
 * @property string $sequence_yard_code
 * @property string $terminal_yard_code
 * @property string $terminal
 * @property string $created_by
 * @property string $created_date
 * @property string $updated_by
 * @property string $updated_date
 * @property int $is_active
 */
class BisonLogisticsYards extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bison_Logistics_Yards';

    protected $fillable = ['yard_code', 'sequence_yard_code', 'terminal_yard_code', 'terminal', 'created_by', 'created_date', 'updated_by', 'updated_date', 'is_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
