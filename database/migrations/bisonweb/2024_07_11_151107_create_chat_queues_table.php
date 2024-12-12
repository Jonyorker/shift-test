<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_queues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('queue_label', 60)->nullable();
            $table->string('start_time', 5)->nullable();
            $table->string('end_time', 5)->nullable();
            $table->string('day_of_the_week', 13)->nullable();
            $table->boolean('is_active')->nullable();
            $table->string('code', 60)->nullable();
            $table->integer('order')->nullable();
            $table->tinyInteger('filter_by_fleet');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_queues');
    }
};
