<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('log_driverlogs_platform_science_raw', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('log_id')->nullable();
            $table->string('mpp_id', 10);
            $table->string('tractor_id', 50);
            $table->string('activity', 100)->nullable();
            $table->dateTime('start_time');
            $table->integer('duration');
            $table->integer('odometer');
            $table->integer('distance_driven');
            $table->decimal('home_terminal_gmt', 18, 0);
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('log_driverlogs_platform_science_raw');
    }
};
