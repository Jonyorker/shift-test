<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_budget', function (Blueprint $table) {
            $table->integer('year')->nullable();
            $table->integer('month')->nullable();
            $table->float('RPM', 53, 0)->nullable();
            $table->integer('Miles')->nullable();
            $table->integer('Days')->nullable();
            $table->integer('ActualTLSales')->nullable();
            $table->integer('tractors')->nullable();
            $table->integer('miles_cityoo')->nullable();
            $table->integer('tractors_cityoo')->nullable();
            $table->integer('miles_cityco')->nullable();
            $table->integer('tractors_cityco')->nullable();
            $table->integer('miles_hwy')->nullable();
            $table->integer('tractors_hwy')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_budget');
    }
};
