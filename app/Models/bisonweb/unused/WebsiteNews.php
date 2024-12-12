<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $intro
 * @property string $description
 * @property string $start_date
 * @property string $end_date
 * @property string $modified_date
 * @property string $website
 * @property string $emp_id
 * @property int $is_external
 * @property string $external_url
 * @property int $is_active
 * @property string $thumbnail_url
 */
class WebsiteNews extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Website_News';

    protected $fillable = ['id', 'title', 'intro', 'description', 'start_date', 'end_date', 'modified_date', 'website', 'emp_id', 'is_external', 'external_url', 'is_active', 'thumbnail_url'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
