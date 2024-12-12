<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $cms_driving_postings_id
 * @property int $cms_driving_labels_id
 */
class CmsDrivingPostingsLabel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Cms_Driving_Postings_Label';

    protected $fillable = ['id', 'cms_driving_postings_id', 'cms_driving_labels_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
