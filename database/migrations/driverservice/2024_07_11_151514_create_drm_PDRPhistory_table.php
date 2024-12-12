<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_PDRPhistory', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('mpp_id', 8)->nullable();
            $table->string('PDRP_level', 6)->nullable();
            $table->dateTime('updated_date')->nullable();
            $table->string('updated_by', 50)->nullable();
            $table->string('record_status', 1)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_PDRPhistory');
    }
};
