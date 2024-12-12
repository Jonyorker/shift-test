<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('equipment_track_average_rental_trailers', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_date');
            $table->float('daily_count', 53, 0)->nullable();
            $table->float('monthly_average', 53, 0)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('equipment_track_average_rental_trailers');
    }
};
