<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $labeldefinition
 * @property string $abbr
 * @property string $name
 * @property int $code
 * @property string $locked
 * @property string $userlabelname
 * @property string $edicode
 * @property mixed $timestamp
 * @property string $systemcode
 * @property string $retired
 * @property string $inventory_item
 * @property string $acct_db
 * @property string $ic_clear_glnum
 * @property string $acct_server
 * @property string $pyt_itemcode
 * @property string $auto_complete
 * @property string $teamleader_email
 * @property string $exclude_from_creditcheck
 * @property string $label_extrastring1
 * @property string $label_extrastring2
 * @property string $create_move
 * @property string $param1
 * @property string $param2
 * @property string $param1_label
 * @property string $param2_label
 * @property string $label_extrastring1_label
 * @property string $label_extrastring2_label
 * @property string $label_extrastring3
 * @property string $label_extrastring4
 * @property string $label_extrastring5
 * @property string $label_extrastring6
 * @property string $global_label
 * @property string $INS_TIMESTAMP
 */
class LabelFile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'LabelFile';

    protected $fillable = ['name', 'code', 'locked', 'userlabelname', 'edicode', 'timestamp', 'systemcode', 'retired', 'inventory_item', 'acct_db', 'ic_clear_glnum', 'acct_server', 'pyt_itemcode', 'auto_complete', 'teamleader_email', 'exclude_from_creditcheck', 'label_extrastring1', 'label_extrastring2', 'create_move', 'param1', 'param2', 'param1_label', 'param2_label', 'label_extrastring1_label', 'label_extrastring2_label', 'label_extrastring3', 'label_extrastring4', 'label_extrastring5', 'label_extrastring6', 'global_label', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
