<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_planchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('driverid', 10)->nullable();
            $table->integer('mov')->nullable();
            $table->integer('leg')->nullable();
            $table->string('status', 10)->nullable();
            $table->dateTime('tripstart')->nullable();
            $table->integer('queueid')->nullable();
            $table->string('changeby', 30)->nullable();
            $table->dateTime('changedate')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_planchanges');
    }
};
