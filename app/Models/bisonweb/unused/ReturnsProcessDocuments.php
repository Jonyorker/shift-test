<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $returns_process_id
 * @property string $document_name
 * @property string $document_url
 * @property string $emp_id
 * @property string $date_created
 * @property string $file_type
 * @property float $file_size
 */
class ReturnsProcessDocuments extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Returns_Process_Documents';

    protected $fillable = ['id', 'returns_process_id', 'document_name', 'document_url', 'emp_id', 'date_created', 'file_type', 'file_size'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
