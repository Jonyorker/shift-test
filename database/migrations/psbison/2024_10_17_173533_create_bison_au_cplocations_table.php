<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_au_cplocations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cmp_id', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_au_cplocations');
    }
};
