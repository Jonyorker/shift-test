<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_appthistory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stp_number')->nullable();
            $table->dateTime('stp_schdtearliest')->nullable();
            $table->dateTime('stp_schdtlatest')->nullable();
            $table->dateTime('stp_arrivaldate')->nullable();
            $table->dateTime('stp_departuredate')->nullable();
            $table->tinyInteger('priority')->nullable();
            $table->string('reason', 20)->nullable();
            $table->string('ref_type', 10)->nullable();
            $table->string('ref_number', 30)->nullable();
            $table->tinyInteger('lumperreqd')->nullable();
            $table->tinyInteger('lumperconf')->nullable();
            $table->string('changeby', 30)->nullable();
            $table->dateTime('changedate')->nullable();
            $table->string('stp_comment', 254)->nullable();
            $table->string('book_comment', 254)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_appthistory');
    }
};
