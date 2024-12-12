<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('google_analytics_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->string('screen_name');
            $table->dateTime('date');
            $table->string('app_version', 20)->nullable();
            $table->string('op_system', 30)->nullable();
            $table->string('op_system_version', 20)->nullable();
            $table->integer('unique_screen_views')->nullable();
            $table->integer('screen_views')->nullable();
            $table->string('source')->nullable();

            $table->unique(['id', 'emp_id', 'screen_name', 'date', 'source'], 'ix_idempidscreendate');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('google_analytics_stats');
    }
};
