<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_safetyapproval_history', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('DriverCode', 20)->nullable();
            $table->integer('app_webID')->nullable();
            $table->string('name', 50)->nullable();
            $table->tinyInteger('app_safetyapproved')->nullable();
            $table->tinyInteger('app_safetydeclined')->nullable();
            $table->string('app_safetyexception', 50)->nullable();
            $table->dateTime('app_safetyapprovedon')->nullable();
            $table->dateTime('UpdatedOn')->nullable();
            $table->string('UpdatedBy', 50)->nullable();
            $table->string('app_safetyapprovedby', 50)->nullable();
            $table->text('app_safetycomments')->nullable();
            $table->dateTime('app_safetydeclinedon')->nullable();
            $table->string('app_safetydeclinedby', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_safetyapproval_history');
    }
};
