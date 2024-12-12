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
        Schema::connection('psbison')->create('bison_weightupdates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mov')->nullable()->index('dkmov');
            $table->integer('ord')->nullable()->index('dkord');
            $table->string('trc', 10)->nullable();
            $table->integer('wgt')->nullable();
            $table->dateTime('dt')->nullable();
            $table->string('msg', 10)->nullable();
            $table->integer('steers')->nullable();
            $table->integer('drives')->nullable();
            $table->integer('trailer')->nullable();
            $table->integer('fuellevel')->nullable();
            $table->integer('bogeys')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_weightupdates');
    }
};
