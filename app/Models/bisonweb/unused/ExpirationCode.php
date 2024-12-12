<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $tmw_expiration_code
 * @property string $label
 * @property string $created_by
 * @property string $created_date
 * @property string $updated_date
 * @property string $updated_by
 * @property int $is_active
 * @property int $is_deleted
 * @property string $deleted_date
 * @property string $deleted_by
 */
class ExpirationCode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Expiration_Code';

    protected $fillable = ['id', 'tmw_expiration_code', 'label', 'created_by', 'created_date', 'updated_date', 'updated_by', 'is_active', 'is_deleted', 'deleted_date', 'deleted_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
