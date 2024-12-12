<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('kpi_fleet_targets', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('effective_date');
            $table->string('type', 100);
            $table->string('label', 100);
            $table->float('value', 53, 0)->nullable();
            $table->string('emp_id', 10);
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('kpi_fleet_targets');
    }
};
