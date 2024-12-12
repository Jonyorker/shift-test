<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_ontimestats', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('dt')->nullable();
            $table->string('region', 8)->nullable();
            $table->integer('deliveries')->nullable();
            $table->integer('late')->nullable();
            $table->string('category', 10)->nullable();
            $table->integer('trips')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_ontimestats');
    }
};
