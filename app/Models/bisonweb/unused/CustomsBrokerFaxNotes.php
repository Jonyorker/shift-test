<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $customs_broker_package_id
 * @property string $note
 * @property string $created_by
 * @property string $created_date
 */
class CustomsBrokerFaxNotes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Customs_Broker_Fax_Notes';

    protected $fillable = ['id', 'customs_broker_package_id', 'note', 'created_by', 'created_date'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
