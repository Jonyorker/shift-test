<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_userinfo', function (Blueprint $table) {
            $table->string('us_userid', 30)->nullable();
            $table->string('ui_dataname', 20)->nullable();
            $table->binary('ui_data')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_userinfo');
    }
};
