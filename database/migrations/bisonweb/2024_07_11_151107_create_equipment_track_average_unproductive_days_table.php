<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('equipment_track_average_unproductive_days', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_date');
            $table->integer('unproductive_days')->nullable();
            $table->integer('grand_total_of_loads')->nullable();
            $table->float('overall_average_of_unproductive_days', 53, 0)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('equipment_track_average_unproductive_days');
    }
};
