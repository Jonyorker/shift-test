<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('world_cities', function (Blueprint $table) {
            $table->string('Country');
            $table->string('City');
            $table->string('AccentCity');
            $table->string('Region');
            $table->string('Population')->nullable();
            $table->string('Latitude');
            $table->string('Longitude');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('world_cities');
    }
};
