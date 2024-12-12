<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $expiration_code_id
 * @property int $priority
 * @property int $notification_days
 * @property string $company_id
 * @property string $report_to
 * @property string $bison_expiration_code
 * @property string $created_date
 * @property string $created_by
 * @property string $updated_date
 * @property string $updated_by
 * @property int $is_active
 * @property int $is_deleted
 * @property string $deleted_date
 * @property string $deleted_by
 */
class ExpirationCompanyDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Expiration_Company_Detail';

    protected $fillable = ['id', 'expiration_code_id', 'priority', 'notification_days', 'company_id', 'report_to', 'bison_expiration_code', 'created_date', 'created_by', 'updated_date', 'updated_by', 'is_active', 'is_deleted', 'deleted_date', 'deleted_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
