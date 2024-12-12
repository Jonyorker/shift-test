<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('passenger', function (Blueprint $table) {
            $table->string('psgr_id', 8);
            $table->string('psgr_firstname', 30)->nullable();
            $table->string('psgr_lastname', 30)->nullable();
            $table->string('psgr_middleinitial', 1)->nullable();
            $table->string('psgr_address1', 50)->nullable();
            $table->string('psgr_address2', 50)->nullable();
            $table->integer('psgr_city')->nullable();
            $table->string('psgr_ctynmstct', 25)->nullable();
            $table->string('psgr_state', 6)->nullable();
            $table->string('psgr_zip', 10)->nullable();
            $table->string('psgr_country', 50)->nullable();
            $table->string('psgr_gender', 1)->nullable();
            $table->dateTime('psgr_dateofbirth')->nullable();
            $table->string('psgr_citizenship_status', 6)->nullable();
            $table->string('psgr_citizenship_country', 50)->nullable();
            $table->string('psgr_driverlicense', 25)->nullable();
            $table->string('psgr_licenseclass', 15)->nullable();
            $table->string('psgr_license_region', 6)->nullable();
            $table->string('psgr_aceid_type', 6)->nullable();
            $table->string('psgr_aceid_number', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('passenger');
    }
};
