<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $car_id
 * @property string $company
 * @property string $address
 * @property string $phone1
 * @property string $phone2
 * @property string $fax
 * @property string $ops_email
 * @property string $maint_email
 * @property string $web
 * @property string $ops_contact_name1
 * @property string $ops_contact_name2
 * @property string $maint_contact_name1
 * @property int $num_tractors
 * @property int $num_tractorsco
 * @property int $num_tractorsoo
 * @property int $num_trailers
 * @property int $num_trailers_48van
 * @property int $num_trailers_48reef
 * @property int $num_trailers_53van
 * @property int $num_trailers_53reef
 * @property int $num_trailers_heater
 * @property int $num_trailers_flat
 * @property int $num_trailers_drop
 * @property int $num_trailers_rack
 * @property int $num_trailers_triaxle
 * @property string $trailers_other
 * @property int $bonded_canada
 * @property string $bonded_canada_text
 * @property int $bonded_usa
 * @property string $bonded_usa_text
 * @property int $post_audit
 * @property string $post_audit_text
 * @property int $hazmat
 * @property string $hazmat_text
 * @property int $ccpaaudit
 * @property string $ccpaaudit_text
 * @property int $generalliability
 * @property string $generalliability_text
 * @property string $generalliability_exp
 * @property int $autoliability
 * @property string $autoliability_text
 * @property string $autoliability_exp
 * @property int $cargoliability
 * @property string $cargoliability_text
 * @property string $cargoliability_exp
 * @property int $ctpat
 * @property string $ctpat_text
 * @property int $services_ftl
 * @property int $services_ltl
 * @property int $services_domcdn
 * @property int $services_interus
 * @property int $services_inbound
 * @property int $services_onlinetracing
 * @property int $services_outbound
 * @property int $services_satelite
 * @property int $services_pagers
 * @property int $services_cellphones
 * @property int $services_edi
 * @property string $services_other
 * @property string $service_provinces
 * @property string $service_states
 * @property string $created
 */
class Carrierapplication extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Carrierapplication';

    protected $fillable = ['id', 'car_id', 'company', 'address', 'phone1', 'phone2', 'fax', 'ops_email', 'maint_email', 'web', 'ops_contact_name1', 'ops_contact_name2', 'maint_contact_name1', 'num_tractors', 'num_tractorsco', 'num_tractorsoo', 'num_trailers', 'num_trailers_48van', 'num_trailers_48reef', 'num_trailers_53van', 'num_trailers_53reef', 'num_trailers_heater', 'num_trailers_flat', 'num_trailers_drop', 'num_trailers_rack', 'num_trailers_triaxle', 'trailers_other', 'bonded_canada', 'bonded_canada_text', 'bonded_usa', 'bonded_usa_text', 'post_audit', 'post_audit_text', 'hazmat', 'hazmat_text', 'ccpaaudit', 'ccpaaudit_text', 'generalliability', 'generalliability_text', 'generalliability_exp', 'autoliability', 'autoliability_text', 'autoliability_exp', 'cargoliability', 'cargoliability_text', 'cargoliability_exp', 'ctpat', 'ctpat_text', 'services_ftl', 'services_ltl', 'services_domcdn', 'services_interus', 'services_inbound', 'services_onlinetracing', 'services_outbound', 'services_satelite', 'services_pagers', 'services_cellphones', 'services_edi', 'services_other', 'service_provinces', 'service_states', 'created'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
