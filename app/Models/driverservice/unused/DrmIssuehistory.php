<?php

namespace App\Models\driverservice\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ih_id
 * @property int $iss_id
 * @property string $ih_updby
 * @property string $ih_upddate
 * @property string $ih_msg
 */
class DrmIssuehistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Drm_Issuehistory';

    protected $fillable = ['ih_id', 'iss_id', 'ih_updby', 'ih_upddate', 'ih_msg'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'driverservice';
}
