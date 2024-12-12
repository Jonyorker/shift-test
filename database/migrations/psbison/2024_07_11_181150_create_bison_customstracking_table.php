<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_customstracking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ord');
            $table->dateTime('dt');
            $table->string('userid', 30)->nullable();
            $table->string('status', 6)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_customstracking');
    }
};
