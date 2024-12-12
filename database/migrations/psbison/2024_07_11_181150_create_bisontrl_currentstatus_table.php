<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisontrl_currentstatus', function (Blueprint $table) {
            $table->string('trl', 13)->nullable();
            $table->string('status', 6)->nullable();
            $table->string('gpsdesc', 100)->nullable();
            $table->dateTime('gpsdate')->nullable();
            $table->float('gpslat', 53, 0)->nullable();
            $table->float('gpslong', 53, 0)->nullable();
            $table->string('curryard', 10)->nullable();
            $table->integer('cmpleg')->nullable();
            $table->string('cmpcmp', 8)->nullable();
            $table->integer('currleg')->nullable();
            $table->string('currcmp', 8)->nullable();
            $table->dateTime('currdt')->nullable();
            $table->integer('nextleg')->nullable();
            $table->string('nextcmp', 8)->nullable();
            $table->dateTime('nextdt')->nullable();
            $table->integer('finalleg')->nullable();
            $table->string('finalcmp', 8)->nullable();
            $table->dateTime('finaldt')->nullable();
            $table->dateTime('lastupdate')->nullable();
            $table->dateTime('cmpdt')->nullable();
            $table->integer('cmpcity')->nullable();
            $table->integer('currcity')->nullable();
            $table->integer('nextcity')->nullable();
            $table->integer('finalcity')->nullable();
            $table->string('equiptype', 10)->nullable();
            $table->string('possession', 6)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisontrl_currentstatus');
    }
};
