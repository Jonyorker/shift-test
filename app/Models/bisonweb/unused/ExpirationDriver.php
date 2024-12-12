<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $driver_code
 * @property int $expiration_company_detail_id
 * @property int $expiration_assigned_reason_id
 * @property string $created_date
 * @property string $created_by
 * @property string $updated_date
 * @property string $updated_by
 * @property string $expiration_date
 * @property string $completed_date
 * @property int $priority
 * @property string $comment
 */
class ExpirationDriver extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Expiration_Driver';

    protected $fillable = ['id', 'driver_code', 'expiration_company_detail_id', 'expiration_assigned_reason_id', 'created_date', 'created_by', 'updated_date', 'updated_by', 'expiration_date', 'completed_date', 'priority', 'comment'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
