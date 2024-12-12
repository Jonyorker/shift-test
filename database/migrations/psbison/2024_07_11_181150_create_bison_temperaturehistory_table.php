<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_temperaturehistory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mov')->nullable();
            $table->string('trc', 10)->nullable();
            $table->string('trl', 13)->nullable();
            $table->dateTime('dtrecd')->nullable();
            $table->smallInteger('temp1')->nullable();
            $table->smallInteger('temp2')->nullable();
            $table->smallInteger('temp3')->nullable();
            $table->smallInteger('fuellevel')->nullable();
            $table->smallInteger('zone1min')->nullable();
            $table->smallInteger('zone1max')->nullable();
            $table->smallInteger('zone1box')->nullable();
            $table->smallInteger('zone1set')->nullable();
            $table->smallInteger('zone2box')->nullable();
            $table->smallInteger('zone2set')->nullable();
            $table->smallInteger('zone3box')->nullable();
            $table->smallInteger('zone3set')->nullable();
            $table->integer('formid')->nullable();
            $table->tinyInteger('is_excluded');
            $table->string('modified_by', 10)->nullable();
            $table->dateTime('modified_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_temperaturehistory');
    }
};
