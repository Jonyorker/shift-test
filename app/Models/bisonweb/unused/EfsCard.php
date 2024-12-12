<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $company_id
 * @property string $driver_id
 * @property string $card_number
 * @property string $status
 * @property string $created_date
 * @property string $expired_date
 * @property int $is_test
 * @property string $card_identification
 * @property float $current_balance
 * @property string $last_updated_date
 * @property int $policy_number
 * @property bool $is_digital
 * @property int $adv_request
 * @property string $last_cash_adv_mobile
 * @property float $adv_balance
 */
class EfsCard extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Efs_Card';

    protected $fillable = ['id', 'company_id', 'driver_id', 'card_number', 'status', 'created_date', 'expired_date', 'is_test', 'card_identification', 'current_balance', 'last_updated_date', 'policy_number', 'is_digital', 'adv_request', 'last_cash_adv_mobile', 'adv_balance'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
