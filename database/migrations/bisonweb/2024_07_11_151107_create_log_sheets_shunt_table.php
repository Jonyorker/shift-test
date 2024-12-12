<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('log_sheets_shunt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->dateTime('log_date');
            $table->string('time_in_hours', 5)->nullable();
            $table->integer('log_shunt_task_id')->nullable();
            $table->dateTime('created_date');
            $table->string('ip_address', 50);
            $table->tinyInteger('is_proccessed');
            $table->dateTime('processed_date')->nullable();
            $table->string('modified_by', 10)->nullable();
            $table->dateTime('modified_date')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('log_sheets_shunt');
    }
};
