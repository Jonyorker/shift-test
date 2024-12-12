<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('dfm_queryfields', function (Blueprint $table) {
            $table->integer('qry_id')->nullable();
            $table->increments('fld_id');
            $table->string('fld_type', 2)->nullable();
            $table->string('fld_name', 50)->nullable();
            $table->string('fld_field', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('dfm_queryfields');
    }
};
