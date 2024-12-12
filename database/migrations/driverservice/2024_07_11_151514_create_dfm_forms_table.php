<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('dfm_forms', function (Blueprint $table) {
            $table->increments('frm_id');
            $table->integer('frm_order')->nullable();
            $table->string('frm_type', 6)->nullable();
            $table->string('frm_name', 50)->nullable();
            $table->string('frm_message', 50)->nullable();
            $table->string('frm_document')->nullable();
            $table->integer('frm_copies')->nullable();
            $table->integer('qry_id')->nullable();
            $table->boolean('prov_bc')->nullable();
            $table->boolean('prov_ab')->nullable();
            $table->boolean('prov_sk')->nullable();
            $table->boolean('prov_mb')->nullable();
            $table->boolean('prov_on')->nullable();
            $table->boolean('prov_qc')->nullable();
            $table->boolean('prov_nb')->nullable();
            $table->boolean('prov_ns')->nullable();
            $table->boolean('prov_pe')->nullable();
            $table->boolean('prov_nf')->nullable();
            $table->integer('drivertype')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('dfm_forms');
    }
};
