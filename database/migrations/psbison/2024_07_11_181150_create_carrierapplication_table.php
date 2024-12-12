<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('carrierapplication', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_id', 8)->nullable();
            $table->string('company')->nullable();
            $table->string('address')->nullable();
            $table->string('phone1', 20)->nullable();
            $table->string('phone2', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('ops_email')->nullable();
            $table->string('maint_email')->nullable();
            $table->string('web')->nullable();
            $table->string('ops_contact_name1', 50)->nullable();
            $table->string('ops_contact_name2', 50)->nullable();
            $table->string('maint_contact_name1', 50)->nullable();
            $table->integer('num_tractors')->nullable();
            $table->integer('num_tractorsco')->nullable();
            $table->integer('num_tractorsoo')->nullable();
            $table->integer('num_trailers')->nullable();
            $table->integer('num_trailers_48van')->nullable();
            $table->integer('num_trailers_48reef')->nullable();
            $table->integer('num_trailers_53van')->nullable();
            $table->integer('num_trailers_53reef')->nullable();
            $table->integer('num_trailers_heater')->nullable();
            $table->integer('num_trailers_flat')->nullable();
            $table->integer('num_trailers_drop')->nullable();
            $table->integer('num_trailers_rack')->nullable();
            $table->integer('num_trailers_triaxle')->nullable();
            $table->string('trailers_other')->nullable();
            $table->tinyInteger('bonded_canada')->nullable();
            $table->string('bonded_canada_text', 50)->nullable();
            $table->tinyInteger('bonded_usa')->nullable();
            $table->string('bonded_usa_text', 50)->nullable();
            $table->tinyInteger('post_audit')->nullable();
            $table->string('post_audit_text', 50)->nullable();
            $table->tinyInteger('hazmat')->nullable();
            $table->string('hazmat_text', 50)->nullable();
            $table->tinyInteger('ccpaaudit')->nullable();
            $table->string('ccpaaudit_text', 50)->nullable();
            $table->tinyInteger('generalliability')->nullable();
            $table->string('generalliability_text', 50)->nullable();
            $table->string('generalliability_exp', 10)->nullable();
            $table->tinyInteger('autoliability')->nullable();
            $table->string('autoliability_text', 50)->nullable();
            $table->string('autoliability_exp', 10)->nullable();
            $table->tinyInteger('cargoliability')->nullable();
            $table->string('cargoliability_text', 50)->nullable();
            $table->string('cargoliability_exp', 10)->nullable();
            $table->tinyInteger('ctpat')->nullable();
            $table->string('ctpat_text', 50)->nullable();
            $table->tinyInteger('services_ftl')->nullable();
            $table->tinyInteger('services_ltl')->nullable();
            $table->tinyInteger('services_domcdn')->nullable();
            $table->tinyInteger('services_interus')->nullable();
            $table->tinyInteger('services_inbound')->nullable();
            $table->tinyInteger('services_onlinetracing')->nullable();
            $table->tinyInteger('services_outbound')->nullable();
            $table->tinyInteger('services_satelite')->nullable();
            $table->tinyInteger('services_pagers')->nullable();
            $table->tinyInteger('services_cellphones')->nullable();
            $table->tinyInteger('services_edi')->nullable();
            $table->string('services_other')->nullable();
            $table->string('service_provinces', 500)->nullable();
            $table->string('service_states', 500)->nullable();
            $table->dateTime('created')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('carrierapplication');
    }
};
