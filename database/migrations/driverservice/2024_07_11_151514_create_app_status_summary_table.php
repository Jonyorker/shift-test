<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_status_summary', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('App_name', 50)->nullable();
            $table->string('Status', 20)->nullable();
            $table->dateTime('Statusdate')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_status_summary');
    }
};
