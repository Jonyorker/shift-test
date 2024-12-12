<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_parking_tags', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('mpp_id', 8)->nullable();
            $table->string('plate', 8)->nullable();
            $table->string('parkingtag', 120)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_parking_tags');
    }
};
