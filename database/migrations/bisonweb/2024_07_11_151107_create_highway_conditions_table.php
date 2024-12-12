<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('highway_conditions', function (Blueprint $table) {
            $table->string('id');
            $table->integer('seg');
            $table->string('pr', 10);
            $table->string('ms')->nullable();
            $table->string('mv')->nullable();
            $table->string('ps', 10)->nullable();
            $table->string('pv', 10)->nullable();
            $table->string('mc')->nullable();
            $table->integer('n')->nullable();
            $table->string('clr', 10)->nullable();
            $table->dateTime('updated_date');
            $table->integer('level')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('highway_conditions');
    }
};
