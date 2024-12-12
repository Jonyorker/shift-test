<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_watch', function (Blueprint $table) {
            $table->integer('act_id')->nullable();
            $table->increments('watch_id');
            $table->string('watch_user', 30)->nullable();
            $table->dateTime('watch_added')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_watch');
    }
};
