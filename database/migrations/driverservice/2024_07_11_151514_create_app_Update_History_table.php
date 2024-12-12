<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_Update_History', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('WebID')->nullable()->index('dk_webid');
            $table->string('UpdatedBy', 100)->nullable();
            $table->dateTime('UpdatedOn')->nullable();
            $table->string('UpdateType', 50)->nullable();
            $table->char('UpdateTypeID', 10)->nullable();
            $table->integer('hubID')->nullable()->index('dk_hubspot');
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_Update_History');
    }
};
