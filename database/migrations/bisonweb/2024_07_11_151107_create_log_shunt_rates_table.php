<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('log_shunt_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('log_shunt_task_id');
            $table->float('rate', null, 0);
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('log_shunt_rates');
    }
};
