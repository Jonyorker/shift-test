<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $truck_id
 * @property string $pay_to
 * @property string $create_date
 * @property int $is_primary
 * @property string $filename
 * @property int $uploaded
 * @property string $image_lookup_guid
 */
class SettlementSheets extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Settlement_Sheets';

    protected $fillable = ['id', 'emp_id', 'truck_id', 'pay_to', 'create_date', 'is_primary', 'filename', 'uploaded', 'image_lookup_guid'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
