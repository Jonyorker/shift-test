<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_latereasoncodes_2', function (Blueprint $table) {
            $table->string('owner', 10);
            $table->string('fault', 20);
            $table->string('reasoncode', 20);
            $table->string('description', 50);
            $table->integer('reasonorder');
            $table->integer('active')->nullable();
            $table->string('edicode', 2);
            $table->string('itoolscategory', 20)->nullable();
            $table->integer('hidden')->nullable();
            $table->integer('fleet')->nullable();
            $table->integer('driver')->nullable();
            $table->integer('carrier')->nullable();
            $table->integer('equipment')->nullable();
            $table->string('email', 300)->nullable();
            $table->integer('ablregion')->nullable();
            $table->string('friendlydesc', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_latereasoncodes_2');
    }
};
