<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('log_driverlogs_peoplenet_raw', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->dateTime('created_date');
            $table->dateTime('effective_date');
            $table->string('status_type', 50);
            $table->integer('odometer');
            $table->string('location')->nullable();
            $table->integer('packet_id');
            $table->dateTime('updated_date');
            $table->tinyInteger('is_processed');
            $table->string('hash_key');
            $table->dateTime('effective_date_adjusted')->nullable();
            $table->decimal('home_terminal_gmt', 5, 0);
            $table->string('tractor_id', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('log_driverlogs_peoplenet_raw');
    }
};
