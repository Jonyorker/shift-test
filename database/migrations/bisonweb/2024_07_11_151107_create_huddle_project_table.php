<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('huddle_project', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->tinyInteger('is_active');
            $table->dateTime('created_date');
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->string('terminal', 100)->nullable();
            $table->string('meeting_dow')->nullable();
            $table->string('meeting_time')->nullable();
            $table->integer('huddle_resource_icebreaker_group_id');
            $table->tinyInteger('is_private');
            $table->string('type', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('huddle_project');
    }
};
