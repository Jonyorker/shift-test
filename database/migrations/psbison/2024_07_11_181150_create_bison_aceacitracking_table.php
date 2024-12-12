<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_aceacitracking', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('dt')->nullable();
            $table->integer('mov')->nullable();
            $table->string('status', 10)->nullable();
            $table->string('type', 3)->nullable();
            $table->integer('ord')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_aceacitracking');
    }
};
