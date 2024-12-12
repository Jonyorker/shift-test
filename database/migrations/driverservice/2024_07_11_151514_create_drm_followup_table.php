<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_followup', function (Blueprint $table) {
            $table->integer('act_id')->nullable();
            $table->integer('iss_id')->nullable();
            $table->increments('fol_id');
            $table->string('fol_type', 3)->nullable();
            $table->string('fol_userid', 30)->nullable();
            $table->string('fol_name', 50)->nullable();
            $table->tinyInteger('fol_sent')->nullable();
            $table->tinyInteger('fol_reply')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_followup');
    }
};
