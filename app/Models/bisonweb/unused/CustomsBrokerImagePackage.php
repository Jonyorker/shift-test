<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $customs_broker_package_id
 * @property string $file_uuid
 * @property string $file_md5
 * @property string $added_by
 * @property string $added_date
 * @property string $removed_date
 * @property string $removed_by
 * @property int $stop_id
 * @property bool $is_active
 * @property int $page_number
 * @property int $is_paps
 * @property string $sent_by
 * @property string $sent_date
 */
class CustomsBrokerImagePackage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Customs_Broker_Image_Package';

    protected $fillable = ['id', 'customs_broker_package_id', 'file_uuid', 'file_md5', 'added_by', 'added_date', 'removed_date', 'removed_by', 'stop_id', 'is_active', 'page_number', 'is_paps', 'sent_by', 'sent_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
