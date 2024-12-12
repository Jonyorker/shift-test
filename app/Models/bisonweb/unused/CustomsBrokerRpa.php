<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $mov_number
 * @property int $ord_hdrnumber
 * @property string $direction
 * @property string $ord_billto
 * @property string $ace_status
 * @property string $lgh_driver
 * @property string $trailer_id
 * @property string $lgh_tractor
 * @property string $ord_shipper
 * @property int $stp_number
 * @property string $stp_status
 * @property string $stp_comment
 * @property string $stp_arrivaldate
 * @property float $pcs
 * @property float $weight
 * @property string $commodity
 * @property string $cmp_id
 * @property string $created_by
 * @property string $created_date
 * @property string $updated_by
 * @property string $updated_date
 * @property string $processed_by
 * @property string $processed_date
 * @property int $customs_broker_package_id
 * @property int $fgt_number
 * @property int $fgt_stp_number
 */
class CustomsBrokerRpa extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Customs_Broker_Rpa';

    protected $fillable = ['id', 'mov_number', 'ord_hdrnumber', 'direction', 'ord_billto', 'ace_status', 'lgh_driver', 'trailer_id', 'lgh_tractor', 'ord_shipper', 'stp_number', 'stp_status', 'stp_comment', 'stp_arrivaldate', 'pcs', 'weight', 'commodity', 'cmp_id', 'created_by', 'created_date', 'updated_by', 'updated_date', 'processed_by', 'processed_date', 'customs_broker_package_id', 'fgt_number', 'fgt_stp_number'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
