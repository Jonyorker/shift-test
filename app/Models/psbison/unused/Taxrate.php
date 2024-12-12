<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $tax_id
 * @property int $tax_type
 * @property string $tax_state
 * @property float $tax_rate
 * @property string $tax_glnum
 * @property string $tax_effectivedate
 * @property string $tax_expirationdate
 * @property string $tax_description
 * @property string $tax_appliesto
 * @property string $tax_ARTaxAuth
 */
class Taxrate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Taxrate';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'tax_id';

    protected $fillable = ['tax_type', 'tax_state', 'tax_rate', 'tax_glnum', 'tax_effectivedate', 'tax_expirationdate', 'tax_description', 'tax_appliesto', 'tax_ARTaxAuth'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
