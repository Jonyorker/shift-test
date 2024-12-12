<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('lgst_rev', function (Blueprint $table) {
            $table->integer('lgh_number');
            $table->integer('ord_number')->nullable();
            $table->float('ABL_cost', 53, 0)->nullable();
            $table->float('ABL_revshare', 53, 0)->nullable();
            $table->float('ABL_adj', 53, 0)->nullable();
            $table->string('ABL_rules', 150)->nullable();
            $table->string('ABL_carrier', 8)->nullable();
            $table->float('ABL_exch', 53, 0)->nullable();
            $table->integer('ABL_miles')->nullable();
            $table->integer('rate_ID')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('lgst_rev');
    }
};
