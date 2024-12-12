<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_contacts', function (Blueprint $table) {
            $table->increments('ct_id');
            $table->integer('acc_id')->nullable()->index('dk_accid');
            $table->string('ct_type', 30)->nullable();
            $table->string('ct_name', 50)->nullable();
            $table->text('ct_address')->nullable();
            $table->string('ct_phone', 50)->nullable();
            $table->string('ct_fax', 50)->nullable();
            $table->string('ct_license', 50)->nullable();
            $table->text('ct_insurance')->nullable();
            $table->integer('clm_id')->nullable();
            $table->string('ct_system', 10)->nullable();
            $table->string('ct_email', 80)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_contacts');
    }
};
