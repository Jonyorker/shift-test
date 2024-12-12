<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonkpi_fleetbudget2', function (Blueprint $table) {
            $table->integer('yy')->nullable();
            $table->integer('mm')->nullable();
            $table->string('fleet', 6)->nullable();
            $table->string('type1', 6)->nullable();
            $table->integer('miles')->nullable();
            $table->integer('units')->nullable();
            $table->integer('oomiles')->nullable();
            $table->integer('oounits')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonkpi_fleetbudget2');
    }
};
