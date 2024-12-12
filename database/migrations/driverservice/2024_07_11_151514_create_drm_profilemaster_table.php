<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_profilemaster', function (Blueprint $table) {
            $table->increments('Record_ID');
            $table->string('profile_code', 10)->nullable();
            $table->string('profile_desc', 50)->nullable();
            $table->string('profile_type', 10)->nullable();
            $table->string('profile_items', 50)->nullable();
            $table->smallInteger('profile_active')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_profilemaster');
    }
};
