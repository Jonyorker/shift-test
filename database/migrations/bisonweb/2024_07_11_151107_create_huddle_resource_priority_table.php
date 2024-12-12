<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('huddle_resource_priority', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->integer('sort_order');
            $table->tinyInteger('is_active');
            $table->string('code')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('huddle_resource_priority');
    }
};
