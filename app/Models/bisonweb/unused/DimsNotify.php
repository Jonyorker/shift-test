<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $DN_subject
 * @property string $DN_To
 * @property string $DN_from
 * @property string $DN_DateSent
 * @property string $DN_Body
 * @property string $DN_notifyType
 */
class DimsNotify extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Dims_Notify';

    protected $fillable = ['ID', 'DN_subject', 'DN_To', 'DN_from', 'DN_DateSent', 'DN_Body', 'DN_notifyType'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
