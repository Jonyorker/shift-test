<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonkpi_facts_fuel', function (Blueprint $table) {
            $table->dateTime('dt')->nullable();
            $table->decimal('quan', 19, 4)->nullable();
            $table->decimal('amount', 19, 4)->nullable();
            $table->decimal('quanoo', 19, 4)->nullable();
            $table->decimal('amountoo', 19, 4)->nullable();
            $table->decimal('quancmp', 19, 4)->nullable();
            $table->decimal('amountcmp', 19, 4)->nullable();
            $table->decimal('fsc', 19, 4)->nullable();
            $table->integer('ldmiles')->nullable();
            $table->integer('mtmiles')->nullable();
            $table->integer('tpmiles')->nullable();
            $table->integer('carmiles')->nullable();
            $table->decimal('revenue', 19, 4)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonkpi_facts_fuel');
    }
};
