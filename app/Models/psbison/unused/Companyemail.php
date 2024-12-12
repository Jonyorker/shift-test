<?php

namespace App\Models\psbison\unused;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ce_id
 * @property string $cmp_id
 * @property string $email_address
 * @property string $contact_name
 * @property string $mail_default
 * @property string $type
 * @property string $ce_phone1
 * @property string $ce_phone1_ext
 * @property string $ce_phone2
 * @property string $ce_phone2_ext
 * @property string $ce_mobilenumber
 * @property string $ce_faxnumber
 * @property string $ce_defaultcontact
 * @property string $ce_comment
 * @property string $ce_source
 * @property string $ce_title
 * @property string $ce_contact_type
 * @property string $ce_branch
 * @property string $ce_fname
 * @property string $ce_address1
 * @property string $ce_address2
 * @property string $ce_address3
 * @property int $ce_cty_code
 * @property string $ce_zip
 * @property string $ce_mail_address1
 * @property string $ce_mail_address2
 * @property string $ce_mail_address3
 * @property int $ce_mail_cty_code
 * @property string $ce_mail_zip
 * @property string $ce_retired
 * @property string $ce_updatedby
 * @property string $ce_updatedt
 * @property string $ce_after_hours
 * @property string $ce_hours_of_operation
 */
class Companyemail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Companyemail';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ce_id';

    protected $fillable = ['cmp_id', 'email_address', 'contact_name', 'mail_default', 'type', 'ce_phone1', 'ce_phone1_ext', 'ce_phone2', 'ce_phone2_ext', 'ce_mobilenumber', 'ce_faxnumber', 'ce_defaultcontact', 'ce_comment', 'ce_source', 'ce_title', 'ce_contact_type', 'ce_branch', 'ce_fname', 'ce_address1', 'ce_address2', 'ce_address3', 'ce_cty_code', 'ce_zip', 'ce_mail_address1', 'ce_mail_address2', 'ce_mail_address3', 'ce_mail_cty_code', 'ce_mail_zip', 'ce_retired', 'ce_updatedby', 'ce_updatedt', 'ce_after_hours', 'ce_hours_of_operation'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'psbison';
}
