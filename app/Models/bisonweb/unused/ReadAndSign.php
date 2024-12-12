<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $start_date
 * @property string $end_date
 * @property int $read_and_sign_template_id
 * @property float $version
 * @property string $created_date
 * @property string $emp_id
 * @property int $parent_id
 * @property int $visibility_id
 */
class ReadAndSign extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Read_And_Sign';

    protected $fillable = ['id', 'title', 'content', 'start_date', 'end_date', 'read_and_sign_template_id', 'version', 'created_date', 'emp_id', 'parent_id', 'visibility_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
