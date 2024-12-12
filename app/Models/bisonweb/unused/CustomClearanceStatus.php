<?php

namespace App\Models\bisonweb\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $mov_number
 * @property string $created_date
 * @property string $updated_date
 * @property int $is_emtpy
 * @property int $is_northbound
 * @property int $paperwork_status
 * @property string $paperwork_message
 * @property int $pars_paps_status
 * @property string $pars_paps_type
 * @property string $pars_paps_message
 * @property int $ace_aci_status
 * @property string $ace_aci_type
 * @property string $ace_aci_message
 * @property int $is_te_bond
 * @property int $te_bond_status
 * @property string $te_bond_message
 * @property string $ace_aci_time
 * @property int $lgh_number
 * @property string $paperwork_datetime
 * @property string $pars_paps_datetime
 * @property string $ace_aci_datetime
 */
class CustomClearanceStatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Custom_Clearance_Status';

    protected $fillable = ['id', 'mov_number', 'created_date', 'updated_date', 'is_emtpy', 'is_northbound', 'paperwork_status', 'paperwork_message', 'pars_paps_status', 'pars_paps_type', 'pars_paps_message', 'ace_aci_status', 'ace_aci_type', 'ace_aci_message', 'is_te_bond', 'te_bond_status', 'te_bond_message', 'ace_aci_time', 'lgh_number', 'paperwork_datetime', 'pars_paps_datetime', 'ace_aci_datetime'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'bisonweb';
}
