<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('huddle_icebreaker', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150);
            $table->string('icebreaker');
            $table->integer('huddle_resource_icebreaker_group_id');
            $table->tinyInteger('is_active');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('huddle_icebreaker');
    }
};
