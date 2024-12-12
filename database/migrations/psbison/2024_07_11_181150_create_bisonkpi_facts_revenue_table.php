<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonkpi_facts_revenue', function (Blueprint $table) {
            $table->increments('id');
            $table->string('typ', 6)->nullable();
            $table->dateTime('dt')->nullable();
            $table->decimal('tlrev', 19, 4)->nullable();
            $table->decimal('adfrev', 19, 4)->nullable();
            $table->decimal('ltlrev', 19, 4)->nullable();
            $table->decimal('ablrev', 19, 4)->nullable();
            $table->decimal('intmrev', 19, 4)->nullable();
            $table->decimal('totalrev', 19, 4)->nullable();
            $table->decimal('budget_tl', 19, 4)->nullable();
            $table->decimal('budget_adf', 19, 4)->nullable();
            $table->decimal('budget_ltl', 19, 4)->nullable();
            $table->decimal('budget_abl', 19, 4)->nullable();
            $table->decimal('budget_int', 19, 4)->nullable();
            $table->integer('miles_tl')->nullable();
            $table->integer('miles_adf')->nullable();
            $table->integer('miles_ltl')->nullable();
            $table->integer('miles_abl')->nullable();
            $table->integer('miles_int')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonkpi_facts_revenue');
    }
};
