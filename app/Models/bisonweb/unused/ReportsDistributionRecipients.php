<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $distribution_id
 * @property string $employee_id
 * @property string $email_address
 * @property bool $is_cc
 */
class ReportsDistributionRecipients extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Reports_Distribution_Recipients';

    protected $fillable = ['id', 'distribution_id', 'employee_id', 'email_address', 'is_cc'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
