<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('companyemail', function (Blueprint $table) {
            $table->string('cmp_id', 8);
            $table->string('email_address', 300)->nullable();
            $table->string('contact_name', 40)->nullable();
            $table->string('mail_default', 1)->nullable();
            $table->string('type', 6)->nullable();
            $table->increments('ce_id');
            $table->string('ce_phone1', 20)->nullable();
            $table->string('ce_phone1_ext', 6)->nullable();
            $table->string('ce_phone2', 20)->nullable();
            $table->string('ce_phone2_ext', 6)->nullable();
            $table->string('ce_mobilenumber', 20)->nullable();
            $table->string('ce_faxnumber', 20)->nullable();
            $table->string('ce_defaultcontact', 1)->nullable();
            $table->string('ce_comment', 256)->nullable();
            $table->string('ce_source', 6)->nullable();
            $table->string('ce_title', 30)->nullable();
            $table->string('ce_contact_type', 6)->nullable();
            $table->string('ce_branch', 12)->nullable();
            $table->string('ce_fname', 40)->nullable();
            $table->string('ce_address1', 100)->nullable();
            $table->string('ce_address2', 100)->nullable();
            $table->string('ce_address3', 100)->nullable();
            $table->integer('ce_cty_code')->nullable();
            $table->string('ce_zip', 10)->nullable();
            $table->string('ce_mail_address1', 100)->nullable();
            $table->string('ce_mail_address2', 100)->nullable();
            $table->string('ce_mail_address3', 100)->nullable();
            $table->integer('ce_mail_cty_code')->nullable();
            $table->string('ce_mail_zip', 10)->nullable();
            $table->string('ce_retired', 1)->nullable();
            $table->string('ce_updatedby', 20)->nullable();
            $table->dateTime('ce_updatedt')->nullable();
            $table->string('ce_after_hours', 1)->nullable();
            $table->string('ce_hours_of_operation', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('companyemail');
    }
};
