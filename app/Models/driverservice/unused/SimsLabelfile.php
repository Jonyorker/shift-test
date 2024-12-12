<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $label_code
 * @property string $label_name
 * @property string $label_definition
 * @property int $label_active
 */
class SimsLabelfile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Sims_Labelfile';

    protected $fillable = ['ID', 'label_code', 'label_name', 'label_definition', 'label_active'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
