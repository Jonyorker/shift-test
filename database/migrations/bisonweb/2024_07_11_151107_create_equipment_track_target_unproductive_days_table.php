<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('equipment_track_target_unproductive_days', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->decimal('target', 19, 4);
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('equipment_track_target_unproductive_days');
    }
};
