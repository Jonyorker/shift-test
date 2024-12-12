<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('equipment_track_trailer_productivity', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_date');
            $table->integer('year');
            $table->integer('week');
            $table->dateTime('week_start');
            $table->dateTime('week_end');
            $table->decimal('percentage', 19, 4);
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('equipment_track_trailer_productivity');
    }
};
