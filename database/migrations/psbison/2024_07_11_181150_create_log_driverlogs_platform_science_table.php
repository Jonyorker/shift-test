<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('log_driverlogs_platform_science', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mpp_id', 20);
            $table->date('log_date');
            $table->string('activity', 50);
            $table->integer('duration');
            $table->dateTime('date_created');
            $table->dateTime('date_updated')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('log_driverlogs_platform_science');
    }
};
