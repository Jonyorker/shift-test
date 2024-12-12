<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_currentorderpositions', function (Blueprint $table) {
            $table->integer('ord');
            $table->string('type', 3)->nullable();
            $table->float('lat', 53, 0)->nullable();
            $table->float('lng', 53, 0)->nullable();
            $table->dateTime('dt')->nullable();
            $table->string('description')->nullable();
            $table->string('currtrailer', 13)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('prov', 2)->nullable();
            $table->string('country', 2)->nullable();
            $table->string('typesrc', 20)->nullable();
            $table->dateTime('dtUTC')->nullable();
            $table->dateTime('dtCST')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_currentorderpositions');
    }
};
