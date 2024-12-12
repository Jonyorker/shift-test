<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_trailerposition', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trlid', 15)->nullable();
            $table->integer('latitude')->nullable();
            $table->integer('longitude')->nullable();
            $table->string('description')->nullable();
            $table->dateTime('reportdt')->nullable();
            $table->dateTime('receivedt')->nullable();
            $table->string('battery', 20)->nullable();
            $table->string('power', 20)->nullable();
            $table->string('quality', 20)->nullable();
            $table->string('location', 8)->nullable();
            $table->string('idlestatus', 20)->nullable();
            $table->decimal('idletime', 19, 4)->nullable();
            $table->integer('speed')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_trailerposition');
    }
};
