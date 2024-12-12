<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $batch_number
 * @property string $created_date
 * @property string $created_by
 */
class PayInformationExcludeBatches extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Pay_Information_Exclude_Batches';

    protected $fillable = ['id', 'batch_number', 'created_date', 'created_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
