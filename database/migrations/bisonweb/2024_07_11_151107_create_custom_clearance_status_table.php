<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('custom_clearance_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mov_number')->index('ky_custom_mov_number');
            $table->dateTime('created_date');
            $table->dateTime('updated_date');
            $table->tinyInteger('is_emtpy');
            $table->tinyInteger('is_northbound');
            $table->tinyInteger('paperwork_status');
            $table->text('paperwork_message')->nullable();
            $table->tinyInteger('pars_paps_status');
            $table->string('pars_paps_type', 10)->nullable();
            $table->text('pars_paps_message')->nullable();
            $table->tinyInteger('ace_aci_status');
            $table->string('ace_aci_type', 10)->nullable();
            $table->text('ace_aci_message')->nullable();
            $table->tinyInteger('is_te_bond');
            $table->tinyInteger('te_bond_status');
            $table->text('te_bond_message')->nullable();
            $table->string('ace_aci_time', 10)->nullable();
            $table->integer('lgh_number')->nullable()->index('ky_custom_lgh_number');
            $table->dateTime('paperwork_datetime')->nullable();
            $table->dateTime('pars_paps_datetime')->nullable();
            $table->dateTime('ace_aci_datetime')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('custom_clearance_status');
    }
};
