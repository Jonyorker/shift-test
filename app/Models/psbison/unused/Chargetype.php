<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $cht_itemcode
 * @property int $cht_number
 * @property string $cht_description
 * @property string $cht_primary
 * @property string $cht_basis
 * @property string $cht_basisunit
 * @property float $cht_basisper
 * @property float $cht_quantity
 * @property string $cht_rateunit
 * @property string $cht_unit
 * @property int $cht_rate
 * @property string $cht_editflag
 * @property string $cht_glnum
 * @property string $timestamp
 * @property int $cht_sign
 * @property string $cht_systemcode
 * @property string $cht_edicode
 * @property string $cht_taxtable1
 * @property string $cht_taxtable2
 * @property string $cht_taxtable3
 * @property string $cht_taxtable4
 * @property string $cht_currunit
 * @property string $cht_remark
 * @property int $cht_rollintolh
 * @property string $cht_retired
 * @property float $cht_maxrate
 * @property int $cht_maxenf
 * @property float $cht_minrate
 * @property int $cht_minenf
 * @property int $cht_zeroenf
 * @property int $cht_crchg
 * @property string $cht_class
 * @property string $cht_rateprotect
 * @property int $gp_tax
 * @property string $last_updateby
 * @property string $last_updatedate
 * @property string $cht_typeofcharge
 * @property string $cht_lh_min
 * @property string $cht_lh_rev
 * @property string $cht_lh_stl
 * @property string $cht_lh_rpt
 * @property string $cht_lh_prn
 * @property string $cht_paperwork_requiretype
 * @property string $cht_allocation_method
 * @property string $cht_allocation_criteria
 * @property string $cht_allocation_groupby
 * @property string $cht_allocation_group_nbr
 * @property string $cht_setrevfromchargetypelist
 * @property string $cht_edit_completion_rate
 * @property string $cht_category1
 * @property string $cht_category2
 * @property string $cht_category3
 * @property string $cht_category4
 * @property string $cht_translation
 * @property string $cht_glkey
 * @property int $cht_ChargeTypeBasisUnitRule_Id
 * @property int $cht_ICpercentage
 * @property string $ltl_chargetype
 * @property string $ops_chargetype
 * @property bool $cht_excludefrcarrevdisplay
 * @property string $cht_exclude_3pp
 * @property string $INS_TIMESTAMP
 * @property mixed $DW_TIMESTAMP
 */
class Chargetype extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Chargetype';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'cht_itemcode';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    protected $fillable = ['cht_number', 'cht_description', 'cht_primary', 'cht_basis', 'cht_basisunit', 'cht_basisper', 'cht_quantity', 'cht_rateunit', 'cht_unit', 'cht_rate', 'cht_editflag', 'cht_glnum', 'timestamp', 'cht_sign', 'cht_systemcode', 'cht_edicode', 'cht_taxtable1', 'cht_taxtable2', 'cht_taxtable3', 'cht_taxtable4', 'cht_currunit', 'cht_remark', 'cht_rollintolh', 'cht_retired', 'cht_maxrate', 'cht_maxenf', 'cht_minrate', 'cht_minenf', 'cht_zeroenf', 'cht_crchg', 'cht_class', 'cht_rateprotect', 'gp_tax', 'last_updateby', 'last_updatedate', 'cht_typeofcharge', 'cht_lh_min', 'cht_lh_rev', 'cht_lh_stl', 'cht_lh_rpt', 'cht_lh_prn', 'cht_paperwork_requiretype', 'cht_allocation_method', 'cht_allocation_criteria', 'cht_allocation_groupby', 'cht_allocation_group_nbr', 'cht_setrevfromchargetypelist', 'cht_edit_completion_rate', 'cht_category1', 'cht_category2', 'cht_category3', 'cht_category4', 'cht_translation', 'cht_glkey', 'cht_ChargeTypeBasisUnitRule_Id', 'cht_ICpercentage', 'ltl_chargetype', 'ops_chargetype', 'cht_excludefrcarrevdisplay', 'cht_exclude_3pp', 'INS_TIMESTAMP', 'DW_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
