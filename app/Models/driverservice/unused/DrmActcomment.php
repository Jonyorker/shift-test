<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $act_id
 * @property int $cmt_id
 * @property string $cmt_text
 * @property string $cmt_by
 * @property string $cmt_date
 * @property string $cmt_type
 * @property string $cmt_data
 */
class DrmActcomment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Drm_Actcomment';

    protected $fillable = ['act_id', 'cmt_id', 'cmt_text', 'cmt_by', 'cmt_date', 'cmt_type', 'cmt_data'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
