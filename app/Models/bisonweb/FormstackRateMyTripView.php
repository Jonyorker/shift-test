<?php

namespace App\Models\bisonweb;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $form_name
 * @property int $submission_id
 * @property string $submission_date
 * @property int $MoveNumber
 * @property string $DriverCode
 * @property int $Rate
 * @property string $RateReason
 * @property string $Comment
 */
class FormstackRateMyTripView extends Model
{
    protected $table = 'formstack_rateMyTrip_view';

    protected $connection = 'bisonweb';

    // Compoships is a package that allows compound key relationships. Please see it's readme for more details.
    // use Compoships;

    protected $fillable = ['form_name', 'submission_id', 'submission_date', 'MoveNumber', 'DriverCode', 'Rate', 'RateReason', 'Comment'];

    //    public function drmActivity()
    //    {
    //        return $this->hasMany(DrmActivity::class, 'mpp_id', 'DriverCode');
    //    }

    // Example of hasMany using compoships, which is compound key relationships.
    //    public function DrmActivity()
    //    {
    //        return $this->hasMany(DrmActivity::class, ['mpp_id', 'act_move'], ['DriverCode', 'MoveNumber']);
    //    }

    // Example of hasManyThrough, which is how to get many of a child relationship to the parent. Cannot be compound key
    // as a limitation of Compoships
    //    public function DrmIssues()
    //    {
    //        return $this->hasManyThrough(DrmIssues::class, DrmActivity::class,  'act_move', 'act_id','MoveNumber', 'act_id' );
    //    }
}
