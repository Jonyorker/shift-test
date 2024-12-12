<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('lgst_sequence', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mov')->nullable();
            $table->string('carrier', 8)->nullable();
            $table->integer('prevmov')->nullable();
            $table->integer('nextmov')->nullable();
            $table->integer('result')->nullable();
            $table->integer('seq')->nullable();
            $table->integer('groupid')->nullable();
            $table->integer('isstart')->nullable();
            $table->integer('isend')->nullable();
            $table->string('status', 6)->nullable();
            $table->dateTime('upddt')->nullable();
            $table->string('updby', 30)->nullable();
            $table->integer('isauto')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('lgst_sequence');
    }
};
