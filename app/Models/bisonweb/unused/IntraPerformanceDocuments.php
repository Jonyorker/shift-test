<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $file_mime
 * @property int $file_size
 * @property string $save_user
 * @property string $save_date
 * @property string $save_notes
 * @property string $file_hash
 * @property string $file_ext
 * @property int $is_employee_visible
 */
class IntraPerformanceDocuments extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Intra_Performance_Documents';

    protected $fillable = ['id', 'emp_id', 'file_mime', 'file_size', 'save_user', 'save_date', 'save_notes', 'file_hash', 'file_ext', 'is_employee_visible'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
