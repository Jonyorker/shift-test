<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('terminal_geocoordinate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('terminal');
            $table->string('code', 100)->nullable();
            $table->decimal('latitude', 18, 13)->nullable();
            $table->decimal('longitude', 18, 13)->nullable();
            $table->decimal('radius_in_miles', 18, 5)->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('terminal_geocoordinate');
    }
};
