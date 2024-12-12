<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('tractorprofile_history', function (Blueprint $table) {
            $table->dateTime('snapshot_date');
            $table->string('trc_number', 8);
            $table->string('trc_fleet', 6);
            $table->string('trc_type1', 6);
            $table->string('trc_type2', 6);
            $table->string('trc_type3', 6);
            $table->string('trc_type4', 6);

            $table->unique(['snapshot_date', 'trc_number'], 'date_driver');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('tractorprofile_history');
    }
};
