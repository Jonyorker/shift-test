<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_currentfleets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fleet', 10)->nullable();
            $table->integer('autosend')->nullable();
            $table->integer('citydwell')->nullable();
            $table->string('flt_type', 10)->nullable();
            $table->integer('cityops')->nullable();
            $table->string('region', 20);
            $table->string('division', 20);
            $table->integer('refnums')->nullable();
            $table->integer('advWarnViewer')->nullable();
            $table->integer('retired')->nullable();
            $table->string('fleetregion', 10)->nullable();
            $table->integer('citypay')->nullable();
            $table->integer('ord_notes')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_currentfleets');
    }
};
