<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('seeing_machine_videos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('video_filename')->nullable();
            $table->text('video_data')->nullable();
            $table->string('tractor_number', 100)->nullable();
            $table->string('manpower_id', 50)->nullable();
            $table->dateTime('timestamp');
            $table->string('event_type', 100)->nullable();
            $table->decimal('latitude', 9, 6)->nullable();
            $table->decimal('longitude', 9, 6)->nullable();
            $table->decimal('speed', 6, 3)->nullable();
            $table->decimal('duration_seconds', 4)->nullable();
            $table->dateTime('event_time_cst')->nullable();
            $table->tinyInteger('is_reviewed')->nullable();
            $table->string('assigned_to')->nullable();
            $table->dateTime('assigned_date')->nullable();
            $table->string('location')->nullable();
            $table->dateTime('event_time_utc')->nullable();
            $table->string('confirmation_state')->nullable();
            $table->tinyInteger('is_ignored')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('seeing_machine_videos');
    }
};
