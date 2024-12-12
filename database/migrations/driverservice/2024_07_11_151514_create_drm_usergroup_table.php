<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_usergroup', function (Blueprint $table) {
            $table->integer('ug_id')->nullable();
            $table->string('ug_type', 1)->nullable();
            $table->string('ug_name', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_usergroup');
    }
};
