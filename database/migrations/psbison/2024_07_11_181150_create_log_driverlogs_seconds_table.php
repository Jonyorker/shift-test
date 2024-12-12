<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('log_driverlogs_seconds', function (Blueprint $table) {
            $table->string('mpp_id', 10);
            $table->dateTime('log_date');
            $table->float('off_duty', 53, 0);
            $table->float('on_duty_driving', 53, 0);
            $table->float('on_duty', 53, 0);
            $table->float('driving', 53, 0);
            $table->float('sleeper', 53, 0);
            $table->integer('odometer');
            $table->integer('distance_driven');
            $table->string('notes')->nullable();
            $table->decimal('home_terminal_gmt', 5, 0);
            $table->string('tractor_id', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('log_driverlogs_seconds');
    }
};
