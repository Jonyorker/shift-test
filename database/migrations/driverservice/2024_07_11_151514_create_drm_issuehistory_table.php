<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_issuehistory', function (Blueprint $table) {
            $table->increments('ih_id');
            $table->integer('iss_id')->nullable();
            $table->string('ih_updby', 30)->nullable();
            $table->dateTime('ih_upddate')->nullable();
            $table->string('ih_msg')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_issuehistory');
    }
};
