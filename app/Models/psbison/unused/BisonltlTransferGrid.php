<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $trip_number
 * @property string $created_date
 * @property string $created_by
 * @property string $comments
 * @property int $space_used
 * @property int $space_remaining
 * @property string $image_url
 * @property int $transfer_completed
 * @property string $completed_date
 * @property int $priority
 */
class BisonltlTransferGrid extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Bisonltl_Transfer_Grid';

    protected $fillable = ['trip_number', 'created_date', 'created_by', 'comments', 'space_used', 'space_remaining', 'image_url', 'transfer_completed', 'completed_date', 'priority'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
