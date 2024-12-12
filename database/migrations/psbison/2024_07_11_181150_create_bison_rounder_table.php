<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_rounder', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('createdt')->nullable();
            $table->string('createby', 30)->nullable();
            $table->integer('leg1')->nullable();
            $table->integer('mov1')->nullable();
            $table->integer('leg2')->nullable();
            $table->integer('mov2')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_rounder');
    }
};
