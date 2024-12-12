<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_profile', function (Blueprint $table) {
            $table->increments('RecordID');
            $table->string('profile_code', 10)->nullable();
            $table->string('mpp_ID', 8)->nullable();
            $table->string('profile_value', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_profile');
    }
};
