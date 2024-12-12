<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_activityhistory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('act_id')->nullable();
            $table->string('updateby', 30)->nullable();
            $table->dateTime('updatedate')->nullable();
            $table->string('action', 1)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_activityhistory');
    }
};
