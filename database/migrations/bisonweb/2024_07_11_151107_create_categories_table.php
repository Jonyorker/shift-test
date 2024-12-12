<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('categories', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('applies_to')->nullable();
            $table->string('find_conditions')->nullable();
            $table->string('condition')->nullable();
            $table->string('front_page', 1)->nullable()->index('index_categories_on_front_page');
            $table->integer('position')->nullable();
            $table->string('counter_conditions')->nullable();
            $table->string('icon')->nullable();
            $table->string('built_in', 1)->nullable();
            $table->string('live_update', 1)->nullable()->index('index_categories_on_live_update');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('categories');
    }
};
