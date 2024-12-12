<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $customs_broker_package_id
 * @property string $file_uuid
 * @property bool $is_processed
 */
class CustomsBrokerImageConverter extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Customs_Broker_Image_Converter';

    protected $fillable = ['id', 'customs_broker_package_id', 'file_uuid', 'is_processed'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
