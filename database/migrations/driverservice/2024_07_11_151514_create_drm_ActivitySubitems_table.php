<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_ActivitySubitems', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('ACTIVITY', 20)->nullable();
            $table->string('TYPE', 20)->nullable();
            $table->string('ITEM', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_ActivitySubitems');
    }
};
