<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('highway_data_points', function (Blueprint $table) {
            $table->increments('id');
            $table->string('highway_conditions_id');
            $table->decimal('latitude', 12, 4);
            $table->decimal('longitude', 12, 4);

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('highway_data_points');
    }
};
