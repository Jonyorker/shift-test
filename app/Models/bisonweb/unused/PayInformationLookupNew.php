<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $emp_id
 * @property string $unit_number
 * @property string $pay_date
 * @property string $cutoff_date
 * @property float $net_amount
 * @property string $pay_batch_num
 * @property string $hourly_type
 * @property string $hourly_start_date
 * @property string $hourly_end_date
 * @property float $hourly_net_amount
 * @property string $hourly_batch_num
 * @property int $settlement_sheets_id
 * @property int $has_fuel_subsidy
 * @property int $has_fuel_statement
 * @property int $has_personal_fuel_statement
 * @property string $pay_identifier
 * @property string $last_pay_date
 * @property string $pay_period_start
 * @property string $pay_period_end
 * @property string $database_name
 * @property float $gross_amount
 */
class PayInformationLookupNew extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Pay_Information_Lookup_New';

    protected $fillable = ['id', 'emp_id', 'unit_number', 'pay_date', 'cutoff_date', 'net_amount', 'pay_batch_num', 'hourly_type', 'hourly_start_date', 'hourly_end_date', 'hourly_net_amount', 'hourly_batch_num', 'settlement_sheets_id', 'has_fuel_subsidy', 'has_fuel_statement', 'has_personal_fuel_statement', 'pay_identifier', 'last_pay_date', 'pay_period_start', 'pay_period_end', 'database_name', 'gross_amount'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
