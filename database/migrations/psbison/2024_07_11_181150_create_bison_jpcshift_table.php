<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_jpcshift', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asgntype', 3)->nullable();
            $table->string('asgnid', 8)->nullable();
            $table->string('otherid', 8)->nullable();
            $table->dateTime('startdt')->nullable();
            $table->dateTime('enddt')->nullable();
            $table->dateTime('calcdt')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_jpcshift');
    }
};
