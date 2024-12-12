<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('washbay_resource_priority', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sort_order');
            $table->string('label', 100);
            $table->tinyInteger('is_active');
            $table->string('priority', 25)->nullable();
            $table->integer('tractor')->nullable();
            $table->integer('trailer')->nullable();
            $table->integer('combo')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('washbay_resource_priority');
    }
};
