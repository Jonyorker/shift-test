<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_problems', function (Blueprint $table) {
            $table->string('iss_problem', 4)->nullable();
            $table->string('iss_description', 80)->nullable();
            $table->string('iss_class', 15)->nullable();
            $table->string('iss_followup')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_problems');
    }
};
