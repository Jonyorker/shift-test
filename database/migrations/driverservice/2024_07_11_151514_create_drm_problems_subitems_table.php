<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_problems_subitems', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('sub_Parent', 4)->nullable();
            $table->integer('sub_Startnum')->nullable();
            $table->integer('sub_Endnum')->nullable();
            $table->string('sub_Description', 50)->nullable();
            $table->integer('sub_Active')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_problems_subitems');
    }
};
