<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $cmd_code
 * @property string $cmd_name
 * @property string $cmd_class
 * @property string $cmd_pin
 * @property string $cmd_stcc
 * @property int $cmd_hazardous
 * @property int $cmd_code_num
 * @property mixed $timestamp
 * @property string $cmd_misc1
 * @property string $cmd_misc2
 * @property string $cmd_misc3
 * @property string $cmd_misc4
 * @property float $cmd_specificgravity
 * @property float $cmd_gravtemperature
 * @property string $cmd_temperatureunit
 * @property string $cmd_taxtable1
 * @property string $cmd_taxtable2
 * @property string $cmd_taxtable3
 * @property string $cmd_taxtable4
 * @property string $cmd_updatedby
 * @property string $cmd_updateddate
 * @property string $cmd_createdate
 * @property string $cmd_active
 * @property string $cmd_cust_num
 * @property string $cmd_dot_name
 * @property string $cmd_haz_num
 * @property string $cmd_waste_code
 * @property string $cmd_haz_class
 * @property string $cmd_haz_subclass
 * @property string $cmd_pin_flag
 * @property string $cmd_risk
 * @property string $cmd_marine
 * @property string $cmd_spec_prov
 * @property string $cmd_cmp_id
 * @property float $cmd_flash_point
 * @property string $cmd_flash_unit
 * @property string $cmd_msds_dt
 * @property float $cmd_min_spill
 * @property string $cmd_health_note
 * @property string $cmd_flammable_note
 * @property string $cmd_reactivity_note
 * @property string $cmd_ppe_note
 * @property string $cmd_driver_note
 * @property float $cmd_ph
 * @property string $cmd_color
 * @property string $cmd_water_soluble
 * @property string $cmd_top_load
 * @property string $cmd_viscosity
 * @property string $cmd_spec_prep
 * @property string $cmd_foaming
 * @property string $cmd_osha
 * @property string $cmd_createdby
 * @property string $cmd_trl_wash_notes
 * @property string $cmd_custom_wash
 * @property string $cmd_makeup_description
 * @property string $cmd_imdg_class
 * @property string $cmd_imdg_subclass
 * @property string $cmd_adr_class
 * @property string $cmd_adr_packaging_group
 * @property string $cmd_adr_trem
 * @property string $cmd_imdg_packaging_group
 * @property string $cmd_imdg_trem
 * @property string $cmd_haz_subclass2
 * @property string $cmd_imdg_subclass2
 * @property float $cmd_flash_point_max
 * @property int $cmd_non_spec
 * @property int $cmd_company_prohibited
 * @property string $cmd_trlwsh_priority1
 * @property string $cmd_trlwsh_priority2
 * @property string $cmd_trlwsh_priority2_begin
 * @property string $cmd_trlwsh_priority2_end
 * @property float $cmd_default_length
 * @property float $cmd_default_width
 * @property float $cmd_default_height
 * @property float $cmd_default_weight
 * @property string $cmd_revtype1
 * @property string $cmd_revtype2
 * @property string $cmd_revtype3
 * @property string $cmd_revtype4
 * @property string $cmd_lghtype1
 * @property string $cmd_lghtype2
 * @property string $cmd_haz_contact
 * @property string $cmd_haz_telephone
 * @property string $cmd_class2
 * @property string $cmd_NMFC_Class
 * @property string $cmd_displaycolor
 * @property string $cmd_TaxClass
 * @property float $cmd_rvp
 * @property string $cmd_exclusive
 * @property string $cmd_app_eqcodes
 * @property string $cmd_ams_compcode
 * @property string $cmd_ams_reason
 * @property string $cmd_ams_complaint
 * @property float $cmd_size
 * @property int $CommodityCategory
 * @property string $INS_TIMESTAMP
 */
class Commodity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Commodity';

    protected $fillable = ['cmd_code', 'cmd_name', 'cmd_class', 'cmd_pin', 'cmd_stcc', 'cmd_hazardous', 'cmd_code_num', 'timestamp', 'cmd_misc1', 'cmd_misc2', 'cmd_misc3', 'cmd_misc4', 'cmd_specificgravity', 'cmd_gravtemperature', 'cmd_temperatureunit', 'cmd_taxtable1', 'cmd_taxtable2', 'cmd_taxtable3', 'cmd_taxtable4', 'cmd_updatedby', 'cmd_updateddate', 'cmd_createdate', 'cmd_active', 'cmd_cust_num', 'cmd_dot_name', 'cmd_haz_num', 'cmd_waste_code', 'cmd_haz_class', 'cmd_haz_subclass', 'cmd_pin_flag', 'cmd_risk', 'cmd_marine', 'cmd_spec_prov', 'cmd_cmp_id', 'cmd_flash_point', 'cmd_flash_unit', 'cmd_msds_dt', 'cmd_min_spill', 'cmd_health_note', 'cmd_flammable_note', 'cmd_reactivity_note', 'cmd_ppe_note', 'cmd_driver_note', 'cmd_ph', 'cmd_color', 'cmd_water_soluble', 'cmd_top_load', 'cmd_viscosity', 'cmd_spec_prep', 'cmd_foaming', 'cmd_osha', 'cmd_createdby', 'cmd_trl_wash_notes', 'cmd_custom_wash', 'cmd_makeup_description', 'cmd_imdg_class', 'cmd_imdg_subclass', 'cmd_adr_class', 'cmd_adr_packaging_group', 'cmd_adr_trem', 'cmd_imdg_packaging_group', 'cmd_imdg_trem', 'cmd_haz_subclass2', 'cmd_imdg_subclass2', 'cmd_flash_point_max', 'cmd_non_spec', 'cmd_company_prohibited', 'cmd_trlwsh_priority1', 'cmd_trlwsh_priority2', 'cmd_trlwsh_priority2_begin', 'cmd_trlwsh_priority2_end', 'cmd_default_length', 'cmd_default_width', 'cmd_default_height', 'cmd_default_weight', 'cmd_revtype1', 'cmd_revtype2', 'cmd_revtype3', 'cmd_revtype4', 'cmd_lghtype1', 'cmd_lghtype2', 'cmd_haz_contact', 'cmd_haz_telephone', 'cmd_class2', 'cmd_NMFC_Class', 'cmd_displaycolor', 'cmd_TaxClass', 'cmd_rvp', 'cmd_exclusive', 'cmd_app_eqcodes', 'cmd_ams_compcode', 'cmd_ams_reason', 'cmd_ams_complaint', 'cmd_size', 'CommodityCategory', 'INS_TIMESTAMP'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
