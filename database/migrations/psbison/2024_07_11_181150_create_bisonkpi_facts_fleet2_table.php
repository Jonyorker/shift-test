<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonkpi_facts_fleet2', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('dt')->nullable();
            $table->string('fleet', 6)->nullable();
            $table->string('type1', 6)->nullable();
            $table->integer('cnt')->nullable();
            $table->integer('miles')->nullable();
            $table->integer('oocnt')->nullable();
            $table->integer('oomiles')->nullable();
            $table->decimal('budgetmiles', 19, 4)->nullable();
            $table->integer('budgetmilesoo')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonkpi_facts_fleet2');
    }
};
