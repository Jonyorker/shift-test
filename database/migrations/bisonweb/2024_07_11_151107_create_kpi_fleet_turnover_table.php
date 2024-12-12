<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('kpi_fleet_turnover', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mppid', 8);
            $table->string('lastname', 50)->nullable();
            $table->string('firstname', 50)->nullable();
            $table->string('fleet', 50)->nullable();
            $table->string('drvtype1', 50)->nullable();
            $table->string('drvtype2', 50)->nullable();
            $table->string('drvtype3', 50)->nullable();
            $table->dateTime('hiredate')->nullable();
            $table->dateTime('termdate')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('kpi_fleet_turnover');
    }
};
