<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('log_driverlogs_isaac_raw', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mpp_id', 10);
            $table->dateTime('last_updated');
            $table->dateTime('effective_date');
            $table->time('off_duty', 7);
            $table->time('sleeper', 7);
            $table->time('driving', 7);
            $table->time('on_duty', 7);
            $table->time('work', 7);
            $table->time('no_work', 7);
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('log_driverlogs_isaac_raw');
    }
};
