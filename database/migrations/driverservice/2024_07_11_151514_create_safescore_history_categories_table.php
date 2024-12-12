<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('safescore_history_categories', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('mpp_id', 8)->nullable();
            $table->dateTime('dt')->nullable();
            $table->string('category', 50)->nullable();
            $table->decimal('score', 19, 4)->nullable();
            $table->string('change', 20)->nullable();
            $table->string('lastlevel', 20)->nullable();
            $table->string('currentlevel', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('safescore_history_categories');
    }
};
