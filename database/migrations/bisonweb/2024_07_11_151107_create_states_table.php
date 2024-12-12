<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('states', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 4)->nullable();
            $table->string('description')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('sort_order')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('states');
    }
};
